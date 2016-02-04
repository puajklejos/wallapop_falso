<?php

	/**
	 * 
	 * 
	 * Registry: stores navigation information
	 * 
	 * @author Toni
	 * 
	 * 
	 * */
	 
	 class Registry{
	 	 private $data=array();
	 	 static $instance;

	 	 // singleton instance
	 	 public static function getInstance(){
	 	 	// there is no instance?
	 	 	if (!(self::$instance instanceof self)){
	 	 		self::$instance=new self();
	 	 		return self::$instance;
	 	 	}else{
	 	 		return self::$instance;
	 	 	}

	 	 }

	 	 function __construct(){
	 	 	$this->data=array();
	 	 	$this->load_conf();
	 	 }

	 	 //methods __set($key,$value)
	 	 function __set($key,$value){
	 	 	if(!array_key_exists($key, $this->data))
	 	 		{
	 	 			$this->data[$key]=$value;
	 	 		}
	 	 }

	 	 //methods __get($key)

	 	 function __get($key){
	 	 	if(array_key_exists($key, $this->data)){
	 	 		return $this->data[$key];
	 	 	}else{
	 	 		return null;
	 	 	}

	 	 }
	 	 function __unset($key=null){
	 	 	if($key!=null){
	 	 		if(array_key_exists($key,$this->data)){
	 	 			//$idx=array_search($key,$this->data);
	 	 			unset($this->data[$key]);
	 	 		}
	 	 	}
	 	 	else{
	 	 		unset($this->data);
	 	 	}
	 	 }
	 	 function load_conf(){
	 	 	$file= APP.'Config.json';
	 	 	$json_str=file_get_contents($file);
	 	 	
	 	 	$array_json=json_decode($json_str);

	 	 	foreach ($array_json as $key => $value) {
	 	 		$this->data[$key]=$value;
	 	 	}
	 	 	
	 	 }

	 }
