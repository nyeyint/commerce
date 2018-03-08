<?php

namespace App\Components\Email\Helpers;

class OrderDateHelper {

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

	public function __construct($helper, $template, $data) {
		$this->helper = $helper;
		$this->template = $template;
		$this->data = $data;

		return $this->parse();
	}

	protected function parse() {
		$string = $this->template;

		if(array_key_exists('order', $this->data)) {
			$this->parsed = is_array($this->helper)
													?  str_replace($this->helper['helper'], $this->data['order']->created_at->format('d-M-Y'), $string)
													:  str_replace($this->helper, $this->data['order']->created_at->format('d-M-Y'), $string);

			return $this;
		}

		return new RemoveHelper($this->helper, $this->template, $this->data);

	}

	public function result() {
		return $this->parsed;
	}

}
