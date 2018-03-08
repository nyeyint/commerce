<?php
namespace App\Components\Facades;

use GuzzleHttp\Client;

class OngkirFacade {
    
	/**
	 * Set the HTTP Wrapper.
	 *
	 * @return \GuzzleHttp\Client instance.
	 */

	public $http;

	public function __construct($config = []) {
		$this->http = new Client([
			'headers' => [
				'key' => env('RAJAONGKIR_APIKEY'),
				'Content-Type' => 'application/json',
				'Accept' => 'application/json'
			],
			'base_uri' => 'http://pro.rajaongkir.com/api/'
		]);
	}


	/**
	 * Get province.
	 *
	 * @return GuzzleHttp Response.
	 */

	public function getProvince() {
		$res = $this->http->request('GET', 'province');

		$json = json_decode($res->getBody()->getContents());

		return $json->rajaongkir->results;
	}

	/**
	 * Get province based on id.
	 *
	 * @param int
	 * @return GuzzleHttp Response.
	 */

	public function getProvinceById(int $id) {
		$res = $this->http->request('GET', 'province', [
			'query' => [
				'id' => $id
			]
		]);

		$json = json_decode($res->getBody()->getContents());

		return $json->rajaongkir->results;
	}

	/**
	 * Get City.
	 *
	 * @return GuzzleHttp Response.
	 */

	public function getCity() {
		$res = $this->http->request('GET', 'city');

		$json = json_decode($res->getBody()->getContents());

		return $json->rajaongkir->results;
	}

	/**
	 * Get City Based on province id.
	 *
	 * @param int
	 * @return GuzzleHttp Response.
	 */

	public function getCityByProvince(int $id) {
		$res = $this->http->request('GET', 'city', [
			'query' => [
				'province' => $id
			]
		]);

		$json = json_decode($res->getBody()->getContents());

		return $json->rajaongkir->results;
	}

	/**
	 * Get City by id.
	 *
	 * @param int
	 * @return GuzzleHttp Response.
	 */

	public function getCityById($id) {
		$res = $this->http->request('GET', 'city', [
			'query' => [
				'id' => $id
			]
		]);

		$json = json_decode($res->getBody()->getContents());

		return json_encode($json->rajaongkir->results);
	}

	/**
	 * Get Subdistrict from city by id.
	 *
	 * @param int
	 * @return GuzzleHttp Response.
	 */

	public function getSubdistrict($id) {
		$res = $this->http->request('GET', 'subdistrict', [
			'query' => [
				'city' => $id
			]
		]);

		$json = json_decode($res->getBody()->getContents());

		return $json->rajaongkir->results;
	}

	/**
	 * Get Cost.
	 *
	 * @param int
	 * @return GuzzleHttp Response.
	 */

	public function calculate($request) {
		$res = $this->http->request('POST', 'cost', [
			'form_params' => [
				'origin' => $request['origin'],
				'originType' => 'city',
				'destination' => $request['destination'],
				'destinationType' => 'subdistrict',
				'weight' => $request['weight'],
				'courier' => $request['courier']
			],
			'headers' => [
				'key' => env('RAJAONGKIR_APIKEY')
			]
		]);

		return $res->getBody()->getContents();
	}


}