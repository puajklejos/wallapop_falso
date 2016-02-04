<?php
	/**
	 *  vHome
	 *  Prepares and loads the corresponding Template
	 *  @author Toni
	 * 
	 * */
	class vHome extends View{

		function __construct(){
			parent::__construct();
			
			$this->tpl=Template::load('home',$this->view_data);
			
		}

	}