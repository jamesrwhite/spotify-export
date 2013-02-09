<?php

class Colour {

	private $foreground_colours = array();
	private $background_colours = array();

	public function __construct() {
		// Set up shell colours
		$this->foreground_colours['black'] = '0;30';
		$this->foreground_colours['dark_gray'] = '1;30';
		$this->foreground_colours['blue'] = '0;34';
		$this->foreground_colours['light_blue'] = '1;34';
		$this->foreground_colours['green'] = '0;32';
		$this->foreground_colours['light_green'] = '1;32';
		$this->foreground_colours['cyan'] = '0;36';
		$this->foreground_colours['light_cyan'] = '1;36';
		$this->foreground_colours['red'] = '0;31';
		$this->foreground_colours['light_red'] = '1;31';
		$this->foreground_colours['purple'] = '0;35';
		$this->foreground_colours['light_purple'] = '1;35';
		$this->foreground_colours['brown'] = '0;33';
		$this->foreground_colours['yellow'] = '1;33';
		$this->foreground_colours['light_gray'] = '0;37';
		$this->foreground_colours['white'] = '1;37';

		$this->background_colours['black'] = '40';
		$this->background_colours['red'] = '41';
		$this->background_colours['green'] = '42';
		$this->background_colours['yellow'] = '43';
		$this->background_colours['blue'] = '44';
		$this->background_colours['magenta'] = '45';
		$this->background_colours['cyan'] = '46';
		$this->background_colours['light_gray'] = '47';
	}

	// Returns coloured string
	public function getColouredString($string, $foreground_colour = null, $background_colour = null) {
		$coloured_string = "";

		// Check if given foreground colour found
		if (isset($this->foreground_colours[$foreground_colour])) {
			$coloured_string .= "\033[" . $this->foreground_colours[$foreground_colour] . "m";
		}
		// Check if given background colour found
		if (isset($this->background_colours[$background_colour])) {
			$coloured_string .= "\033[" . $this->background_colours[$background_colour] . "m";
		}

		// Add string and end colouring
		$coloured_string .=  $string . "\033[0m";

		return $coloured_string;
	}

	// Returns all foreground colour names
	public function getForegroundColours() {
		return array_keys($this->foreground_colours);
	}

	// Returns all background colour names
	public function getBackgroundColours() {
		return array_keys($this->background_colours);
	}

}