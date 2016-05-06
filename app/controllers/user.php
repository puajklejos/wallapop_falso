<?php
	
	class User extends Controller{
		protected $model;
		protected $view;
		
		function __construct($params){
			parent::__construct($params);
			$this->model=new mUser();
			$this->view= new vUser();
			
			//echo 'Hello controller!';
		}
		function home(){
			//Coder::codear($this->conf);
		}

		function mostrar_anuncios()
		{
			$resultado=$this->model->cargar_anuncios();
			if($resultado!=null)
			{
				/*var_dump($resultado);*/
				/*$output = utf8_string_array_encode($resultado);*/
				$this->ajax_set($resultado);
			}
			else
			{
				return false;
			}
		}
}