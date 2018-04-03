<?php

namespace App\Components\Email\Helpers;

class OrderPaymentMethodHelper
{

    /**
     * The helper key
     *
     * @return string
     */
    public $helper;

    /**
     * Email template Object
     *
     * @return string
     */
    public $template;

    /**
     * The data object
     *
     * @return array
     */
    public $data;

    /**
     * The parsed template
     *
     * @return string
     */
    public $parsed;

    public function __construct($helper, $template, $data)
    {
        $this->helper = $helper;
        $this->template = $template;
        $this->data = $data;

        return $this->parse();
    }

    protected function parse()
    {
        $string = $this->template;

        if (array_key_exists('order', $this->data)) {
            $order_data   = json_decode($this->data['order']->payment_method);
            $this->parsed = is_array($this->helper)
                            ?  str_replace($this->helper['helper'], $order_data->front_name, $string)
                              str_replace($this->helper, $order_data->front_name, $string);

            return $this;
        }

        return new RemoveHelper($this->helper, $this->template, $this->data);
    }

    public function result()
    {
        return $this->parsed;
    }
}
