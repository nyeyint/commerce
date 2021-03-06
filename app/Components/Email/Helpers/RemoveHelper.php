<?php

namespace App\Components\Email\Helpers;

class RemoveHelper
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

        $this->parsed = is_array($this->helper)
                                                ? str_replace($this->helper['helper'], ' ', $string)
                                                : str_replace($this->helper, ' ', $string);


        return $this;
    }

    public function result()
    {
        return $this->parsed;
    }
}
