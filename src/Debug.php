<?php
namespace Tecnocampus;

class Debug {
	public static function s($array, $finish = false) {
		print "<pre style='background: #eee; padding: 20px; color:black;'>";
		print_r ($array);
		print "</pre>";
		if ($finish) {
			die();
		}
	}
	public static function x($array) {
		self:s($array, true);
	}
}