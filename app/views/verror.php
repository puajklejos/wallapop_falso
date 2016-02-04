<?php
/**
	 *  vHome
	 *  Prepares and loads the corresponding Template
	 *  @author Toni
	 * 
	 * */
	class vError extends View{

		function __construct(){
			parent::__construct();
			
			$this->tpl=Template::load('error',$this->view_data);
			
		}

	}