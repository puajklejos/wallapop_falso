<?php
	/**
	 *  vHome
	 *  Prepares and loads the corresponding Template
	 *  @author Toni
	 * 
	 * */
	class vDash extends View{

		function __construct(){
			parent::__construct();
			
			$this->tpl=Template::load('dashboard_tpl',$this->view_data);
			
		}

	}