<?php
	
	class Anuncio extends Controller{
		protected $model;
		protected $view;
		
		function __construct($params){
			parent::__construct($params);
			$this->model=new mAnuncio();
			$this->view= new vAnuncio();
			
			//echo 'Hello controller!';
		}
		function home(){
			//Coder::codear($this->conf);
	}
	function anuncio()
	{
		 if(isset($_POST['titulo'])){
         $titulo=filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
         $subtitulo=filter_input(INPUT_POST, 'subtitulo', FILTER_SANITIZE_STRING); 
         $descripcion=filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING); 
         $anuncio_true=$this->model->ins_anuncio($titulo, $subtitulo, $descripcion);
         if ($anuncio_true== TRUE){
              /*Session::set('usuario',$usuario_ajax);
              setcookie('usuario',Session::get('usuario'));*/
              $output=array('redirect'=>APP_W.'home');
              $this->ajax_set($output);
          }
          else{ 
              $output=array('redirect'=>APP_W.'user');
              $this->ajax_set($output);
          }
    }
	}
}