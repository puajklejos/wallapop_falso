<?php
	//require 'sys/request.php';
	/**
	 *  Core: Front Controller
	 *  
	 * @author Toni
	 * @package sys
	 * 
	 * */

	class Core{
		static private $controller;
		static private $action;
		static private $params;

		static function init(){
				// begining to extract 
				// routing elements
				Request::retrieve();
				$controller=Request::getCont();
				
				self::$controller=$controller;
				
			
				$action=Request::getAct();
				self::$action=$action;
				
				$params=Request::getParams();
				
				// routing to the correspondig 
				// controller
				self::router();
			}
			static function router(){
			//redirects Control to respective controller
			$route=(self::$controller!="")?self::$controller:'home';
			$action=(self::$action!="")?self::$action:'home';
			
			
			$fileroute=strtolower($route).'.php';
			//if exists the file controller
			if(is_readable(APP.'controllers'.DS.$fileroute)){
			
				// create an instance of new controller
				self::$controller=new $route(self::$params=null);
				
				if (is_callable(array(self::$controller,$action))){
					//if exists the  method....
					call_user_func(array(self::$controller, $action));
				}
				else{ echo "Unexistent method!";}
			}
			else{
				self::$controller=new Error;
				
			}
		}
	}