<?php

namespace App\Components\Payment\PaymentHelper;

use Exception;
use GuzzleHttp\Client;

class MidtransHelper
{

    /**
     * HTTP Client Wrapper.
     *
     * @return GuzzleHttp\Client.
     */

    protected $http;

    /**
     * Midtrans Server Key.
     *
     * @return string.
     */

    protected $server_key;

    /**
     * Midtrans production mode.
     *
     * @return bool.
     */

    protected $is_production;

    /**
     * Midtrans SNAP Sandbox URL
     *
     * @return string.
     */

    const SNAP_SANDBOX_URL = 'https://app.sandbox.midtrans.com/snap/v1/transactions/';

    /**
     * Midtrans SNAP Production URL.
     *
     * @return string.
     */

    const SNAP_PRODUCTION_URL = 'https://app.midtrans.com/snap/v1/transactions/';

    /**
     * Midtrans API Sandbox URL.
     *
     * @return string.
     */

    const SANDBOX_API_URL = 'https://api.sandbox.midtrans.com/v2/';

    /**
     * Midtrans API Production URL.
     *
     * @return string.
     */

    const PRODUCTION_API_URL = 'https://api.midtrans.com/v2/';

    public function __construct($server_key = null, $production = false)
    {
        $this->server_key = $server_key;
        $this->is_production = $production;
    }

    public function setServerKey($key)
    {
        $this->server_key = $key;

        return $this;
    }

    public function setProduction($production = false)
    {
        $this->is_production = $production;

        return $this;
    }

    private function snapUrl()
    {
        return $this->is_production ? self::SNAP_PRODUCTION_URL : self::SNAP_SANDBOX_URL;
    }

    private function apiUrl()
    {
        return $this->is_production ? self::PRODUCTION_API_URL : self::SANDBOX_API_URL;
    }

    private function request($url, $type, $data = [])
    {
        $this->http = new Client([
              'headers' => [
                  'Content-Type' => 'application/json',
                  'Accept' => 'application/json',
                  'Authorization' => 'Basic ' . base64_encode($this->server_key . ':')
              ],
              'verify' => __DIR__ . '/cert/cacert.pem',
          ]);

        try {
            $res = $this->http->request($type, $url, [
                  'json' => $data
              ]);

            return json_decode($res->getBody()->getContents());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getResponse()->getStatusCode());
        }
    }

    public function vtRedirectUrl($body)
    {
        return $this->request($this->apiUrl() . 'charge', 'POST', $body)->redirect_url;
    }

    public function vtCharge()
    {
        return $this->request($this->apiUrl() . 'charge', 'POST', $body);
    }

    public function transactionStatus($orderId)
    {
        return $this->request($this->apiUrl() . $orderId . '/status', 'GET');
    }

    public function approve($orderId)
    {
        return $this->request($this->apiUrl() . $orderId . '/approve', 'POST');
    }

    public function cancel($orderId)
    {
        return $this->request($this->apiUrl() . $orderId . '/cancel', 'POST');
    }

    public function expire($orderId)
    {
        return $this->request($this->apiUrl() . $orderId . '/expire', 'POST');
    }
}
