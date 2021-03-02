<?php 

/*
Legal:
	Version: MPL 1.1
	
	The contents of this file are subject to the Mozilla Public License Version 
	1.1 the "License"; you may not use this file except in compliance with 
	the License. You may obtain a copy of the License at 
	http://www.mozilla.org/MPL/
	
	Software distributed under the License is distributed on an "AS IS" basis,
	WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
	for the specific language governing rights and limitations under the
	License.
	
	The Original Code is the Pawn framework.
	
	The Initial Developer of the Original Code is Andrew Sebastian "SkuZZi".
	The full code of this include is Copyrighted C 2021
	by the original developer. All Rights Reserved.

Contributors:
	SkuZZi

Thanks:
	Mr. Pawno - idea to make this unbreakable system

*/

class BHash {
	private static $instance;
	public static $hash;

	public static function init()
	{
		if (is_null(self::$instance))
		{
			self::$instance = new self();
		}
		return self::$instance;
	}

	public static function toBinary($number) {
		$bin = "";
		$temp_number = $number;
		while($temp_number > 0) {
			$bin = $bin.''.($temp_number % 2);
			$temp_number = $temp_number / 2; 
		}
		return substr($bin, 0, $number > 63 ? 7 : 6);
	}

	public static function hash($text) {
		$hash_length = 128;
		$hash = "";

		while(strlen($hash) < $hash_length) 
			for($i = 0; $i < strlen($text); $i ++) 
				$hash = $hash.''.self::toBinary(ord($text[$i]));

		return substr($hash, 0, $hash_length);
	}
}

?>