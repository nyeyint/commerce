<?php

namespace App\Components\Facades;

class MailParser {

	public $template = '';

	public function parse($template, $data = []) {
		$this->template = $template;

		// get all helpers by extracting the template
		$keys = $this->extract($this->template);

		// loop through helper keys
		foreach($keys as $helper) {
			$array = false;

			// check if helper does have a child_helper
			if(array_key_exists('helper_child', $helper)) {
					$helper_type = $helper['helper_child']['helper_type'];
					$child_type  = $helper['helper_child']['child_type'];
					$child_value = $helper['helper_child']['child_value'];

					// check if the child_type & child_value is defined on config
					$config_child_type = config('mail_helper.' . $helper_type . '.child.' . $child_type);
					if($config_child_type != null) {
						if(array_key_exists($child_value, $config_child_type)) {
							// if child value is defined, then set the handler with the child value config
							$handler = $config_child_type[$child_value]['handler'];
							$array = true;
						}
						else
						{
							// if no then remove the helper from the template
							$handler = config('mail_helper.remove_helper')['handler'];
						}
				}
				else
				{
						// also if config_child_type is null remove the helper from the template
						$handler = config('mail_helper.remove_helper')['handler'];
				}
			}
			else
			{
					// helper doesn't have any child, so set the helper as a handler
					$handler = config('mail_helper.' . $helper['helper'])['handler'];
					$array = false;
			}

			if($handler == null) {
					continue;
			}

			if($array) {
					$class = new $handler($helper, $this->template, $data);
			}
			else
			{
					$class = new $handler($helper['helper'], $this->template, $data);
			}

			$this->template = $class->result();
		}

		return $this->template;

	}

	public function extract($string) {
		// extract all helpers from mail template
		$regex = preg_match_all("/(\[(.*?)\])/is", $string, $matches);

		// save the extracted helpers
		$extracted = [];

		// loop through regex result to reformat helper
		foreach($matches[0] as $key => $item) {

			// find the helper child ex: [button url=login_url]
			$regex = preg_match("/(\[(.*?)\s+(.*)\=\"?(.*?)\"?\])/is", $item, $match);
			if($regex) {
				// if child found then make an array of helper_child as a key with $match
				$extracted[$key]['helper']  = $item;
				$extracted[$key]['helper_child']['helper'] = $match[1];
				$extracted[$key]['helper_child']['helper_type'] = '[' . $match[2] . ']';
				$extracted[$key]['helper_child']['child_type'] = $match[3];
				$extracted[$key]['helper_child']['child_value'] = $match[4];
			}
			else
			{
				// if no child found then save the helper only.
				$extracted[$key]['helper'] = $item;
			}

		}

		// we have the extracted helper, now check whenever the helper have a closing tag.
		return $extracted;
	}

	protected function assign($key, $template, $data) {

	}

}
