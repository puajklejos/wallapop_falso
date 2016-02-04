<?php

	class View{

		protected $tpl;
		protected $view_data;
		function __construct(){
			
			$conf=Registry::getInstance();
			// access to app_data that configures html-view
			$this->view_data=(array)$conf->app;
		}
		
	}