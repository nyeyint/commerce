<?php

namespace App\Components\Email\Helpers;

class OrderShippingTrackingNumberHelper
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
            $tracking_number = (null == $this->data['order']->receipt_number)
                              ? 'Unknown'
                              : $this->data['order']->receipt_number;

            $this->parsed    = is_array($this->helper)
                                                    ?  str_replace($this->helper['helper'], $tracking_number, $string)
                                                    :  str_replace($this->helper, $tracking_number, $string);

            return $this;
        }

        return new RemoveHelper($this->helper, $this->template, $this->data);
    }

    public function result()
    {
        return $this->parsed;
    }
}
