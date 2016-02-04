<?php
	class Request{
		static private $query=array();

		static function retrieve(){
			$array_query=explode('/',$_SERVER['REQUEST_URI']);
			//extract the first "/"
			array_shift($array_query);
			// if we publish in root
			
			if (!is_base()){
				array_shift($array_query);
			}
			//deleting blanks at the end
			if(end($array_query)==""){
				array_pop($array_query);
			}
			//return value to static $query
			self::$query=$array_query;

			//var_dump($array_query);
		}
		static function getCont(){
			return array_shift(self::$query);
		}
		static function getAct(){
			return array_shift(self::$query);
		}
		static function getParams(){
			//primer comprovar que queda algo
			if (count(self::$query)>0){
				//comprovar si és parell
				if((count(self::$query)%2)==0){
					Coder::codear(self::$query);
					return self::$query;

				}else{
					echo 'ERROR in params array';
				}

			}

		}
	}