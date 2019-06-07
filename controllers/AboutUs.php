<?php

class AboutUs extends Controller {
	
	public static function test(){
		
		print_r(self::query("SELECT * FROM users"));
		
	}
	
	public static function doSomething(){
		
		print_r(self::query("SELECT * FROM users"));
		
	}
	
}

?>