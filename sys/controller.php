<?php
	/**
	 *  Controller
	 *  
	 *  @author Toni
	 *  @package sys
	 * 
	 * 
	 * */
	
	class Controller{
		protected $model;
		protected $view; 
		protected $params;
		protected $conf;


		function __construct($params){
			//parent::__construct($params);
			$this->params=$params;
			$this->conf=Registry::getInstance();

		}

		function json_out($output)
		{
			ob_clean();
			if (is_array($output)) {
				
			}
		}
	}