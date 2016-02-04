<?php
	
	class Home extends Controller{
		protected $model;
		protected $view;
		
		function __construct($params){
			parent::__construct($params);
			$this->model=new mHome();
			$this->view= new vHome();
			
			//echo 'Hello controller!';
		}
		function home(){
			//Coder::codear($this->conf);
	}
		function login(){
   		if(isset($_POST['usuario'])){
         $usuario=filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
         $password=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
         $user=$this->model->login($usuario,$password);
         if ($user== TRUE){
               // cap a la pàgina principal
               header('Location:'.APP_W.'user');
         }
         else{
             // no hi és l'usuari, cal registrar
               header('Location:'.APP_W.'registro');
             }
 	  }
 	}
}