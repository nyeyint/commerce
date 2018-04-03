<?php

namespace App\Components\Email\Helpers;

class ShippingCourierHelper
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
            $courier_data = json_decode($this->data['order']->shipping_method);
            if ($courier_data->courier_name == 'jne') {
                $courier_name = jne_formatter($courier_data->service) . '-' . $courier_data->service;
            } else {
                $courier_name = $courier_data->courier_name . '-' . $courier_data->service;
            }

            $this->parsed = is_array($this->helper)
                                                    ?  str_replace($this->helper['helper'], $courier_name, $string)
                                                    :  str_replace($this->helper, $courier_name, $string);

            return $this;
        }

        return new RemoveHelper($this->helper, $this->template, $this->data);
    }

    public function result()
    {
        return $this->parsed;
    }
}
