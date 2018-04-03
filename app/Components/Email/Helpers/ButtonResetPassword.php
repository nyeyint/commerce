<?php

namespace App\Components\Email\Helpers;

class ButtonResetPassword
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

        $button = '
			<a href="' . url('/password/reset/' . $this->data["token"]) . '" style="font-family: Avenir,Helvetica,sans-serif;
		    box-sizing: border-box;
		    border-radius: 3px;
		    color: #fff;
		    display: inline-block;
		    text-decoration: none;
		    background-color: #3097d1;
		    border-top: 10px solid #3097d1;
		    border-right: 18px solid #3097d1;
		    border-bottom: 10px solid #3097d1;
		    border-left: 18px solid #3097d1;">Reset!</a>
		';

        \Log::info($this->helper['helper']);
        $this->parsed = str_replace($this->helper['helper'], $button, $string);

        return $this;
    }

    public function result()
    {
        return $this->parsed;
    }
}
