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

 	function login_ajax(){
    if(isset($_POST['user_ajax'])){
         $usuario_ajax=filter_input(INPUT_POST, 'user_ajax', FILTER_SANITIZE_STRING);
         $pass_ajax=filter_input(INPUT_POST, 'pass_ajax', FILTER_SANITIZE_STRING); 
         $user_true=$this->model->login_ajax($usuario_ajax, $pass_ajax);
         if ($user_true== TRUE && $_SESSION['rol_usr']!=1){
              /*Session::set('usuario',$usuario_ajax);
              setcookie('usuario',Session::get('usuario'));*/
              $output=array('redirect'=>APP_W.'user');
              $this->ajax_set($output);
          }
          elseif($_SESSION['rol_usr']==1)
          {
              $output=array('redirect'=>APP_W.'dashboard');
              $this->ajax_set($output);
          }
          else{ 
             $output=array('redirect'=>APP_W.'bad_login');
             $this->ajax_set($output);
          }
    }
}

    function destroy_session()
    {
      Session::destroy();
      header('Location:'.APP_W.'home');
    }

    function redirect_dash()
    {
       header('Location:'.APP_W.'dashboard');
    }
}