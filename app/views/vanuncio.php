<?php
/**
	 *  vHome
	 *  Prepares and loads the corresponding Template
	 *  @author Toni
	 * 
	 * */
	class vAnuncio extends View{

		function __construct(){
			parent::__construct();
			
			$this->tpl=Template::load('anuncio_tpl',$this->view_data);
			
		}

	}