<?php
	
	class Registro extends Controller{
		protected $model;
		protected $view;
		
		function __construct($params){
			parent::__construct($params);
			$this->model=new mRegister();
			$this->view= new vRegister();
			
			//echo 'Hello controller!';
		}
		function home(){
			//Coder::codear($this->conf);
	}
		function register(){
   		if(isset($_POST['usuario_nuevo'])){
         $usuario=filter_input(INPUT_POST, 'usuario_nuevo', FILTER_SANITIZE_STRING);
         $password=filter_input(INPUT_POST, 'password_nuevo', FILTER_SANITIZE_STRING);
         $pais=filter_input(INPUT_POST, 'pais_nuevo', FILTER_SANITIZE_STRING);
         $poblacion=filter_input(INPUT_POST, 'pobl_nuevo', FILTER_SANITIZE_STRING);
         $telefono=filter_input(INPUT_POST, 'tlf_nuevo', FILTER_SANITIZE_STRING);
         $email=filter_input(INPUT_POST, 'email_nuevo', FILTER_SANITIZE_STRING);

         $usuario=$this->model->register();
 	}
 	}
}