<?php

class Controller extends Database{
	
	
	public static function CreateView($viewName){
		//echo "View Created!";
		require_once("./views/$viewName.php");
		static::doSomething();
	}
}

?>