<?php

class Input{
	public static $data = array();
	
	public static function get($key){
		if(isset(self::$data[$key])){
			return self::$data[$key];
		}else{
			return false;
		}
	}
	
	public static function set($key, $val){
		self::$data[$key] = $val;
		return $val;
	}
	
	public function has($key){
		return isset(self::$data[$key]);
	}
	
	public static function posted(){
		return !!count(self::$data);
	}
	
	public static function all(){
		return self::$data;
	}
}

foreach($_POST as $key => $val){
	Input::set($key, $val);
}

$json = json_decode(file_get_contents('php://input'),true);

if($json){
	foreach($json as $key => $val){
		Input::set($key, $val);
	}
}

parse_str(file_get_contents("php://input"),$putVars);

if($putVars){
	foreach($putVars as $key => $val){
		Input::set($key, $val);
	}
}

