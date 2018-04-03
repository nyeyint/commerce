<?php 

namespace App\Components\Email\Helpers;

class ButtonActivateAccountHelper
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

        if ($this->data['user'] == null) {
            \Log::info('user not login, from: ButtonActivateAccountHelper');
            return new RemoveHelper($this->helper['helper'], $this->template, $this->data);
        }

        if ($this->data['user']->verified) {
            \Log::info('user not verified, from: ButtonActivateAccountHelper');
            return new RemoveHelper($this->helper['helper'], $this->template, $this->data);
        }

        $button = '
			<a href="' . url('/verify/' . $this->data["user"]->email_token) . '" style="font-family: Avenir,Helvetica,sans-serif;
		    box-sizing: border-box;
		    border-radius: 3px;
		    color: #fff;
		    display: inline-block;
		    text-decoration: none;
		    background-color: #3097d1;
		    border-top: 10px solid #3097d1;
		    border-right: 18px solid #3097d1;
		    border-bottom: 10px solid #3097d1;
		    border-left: 18px solid #3097d1;">Activate</a>
		';

        $this->parsed = str_replace($this->helper['helper'], $button, $string);

        return $this;
    }

    public function result()
    {
        return $this->parsed;
    }
}
