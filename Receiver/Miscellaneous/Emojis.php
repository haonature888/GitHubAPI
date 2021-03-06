<?php
namespace Scion\GitHub\Receiver\Miscellaneous;

/**
 * This Emojis API class lets you list all the emojis available to use on GitHub.
 * @link    https://developer.github.com/v3/emojis/
 * @package Scion\GitHub\Receiver\Miscellaneous
 */
class Emojis extends AbstractMiscellaneous {

	/**
	 * Lists all the emojis available to use on GitHub.
	 * @link https://developer.github.com/v3/emojis/#emojis
	 * @return array
	 */
	public function get() {
		return $this->getApi()->request('/emojis');
	}
} 