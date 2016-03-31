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
        /*function login(){
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
    }*/

 	function register_ajax(){
   		if(isset($_POST['usuario_nuevo'])){
         $usuario=filter_input(INPUT_POST, 'usuario_nuevo', FILTER_SANITIZE_STRING);
         $password=filter_input(INPUT_POST, 'password_nuevo', FILTER_SANITIZE_STRING);
         $pais=filter_input(INPUT_POST, 'pais_nuevo', FILTER_SANITIZE_STRING);
         $poblacion=filter_input(INPUT_POST, 'pobl_nuevo', FILTER_SANITIZE_STRING);
         $telefono=filter_input(INPUT_POST, 'tlf_nuevo', FILTER_SANITIZE_STRING);
         $email=filter_input(INPUT_POST, 'email_nuevo', FILTER_SANITIZE_STRING);
         $foto_perfil = filter_input(INPUT_POST, 'foto_p', FILTER_SANITIZE_STRING);

         $usuario=$this->model->register_ajax($usuario,$password,$pais,$poblacion,$telefono,$email, $foto_perfil);

         if ($usuario== TRUE){
               // no se ha registrado
            $output=array('redirect'=>APP_W.'registro');
            $this->ajax_set($output);
         }
         else{
             //se ha registrado el usuario
             $output=array('redirect'=>APP_W.'home');
             $this->ajax_set($output);
             }
 	}
 	}
}
?>