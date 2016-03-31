<?php
	/**
	 *  vHome
	 *  Prepares and loads the corresponding Template
	 *  @author Toni
	 * 
	 * */
	class vBad_login extends View{

		function __construct(){
			parent::__construct();
			
			$this->tpl=Template::load('bad_login',$this->view_data);
			
		}

	}