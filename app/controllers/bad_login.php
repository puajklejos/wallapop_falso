<?php
	
	class Bad_login extends Controller{
		protected $model;
		protected $view;
		
		function __construct($params){
			parent::__construct($params);
			$this->model=new mBad_login();
			$this->view= new vBad_login();
			
			//echo 'Hello controller!';
		}
		function home(){
			//Coder::codear($this->conf);
	}

}