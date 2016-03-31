<?php
	
	class Dashboard extends Controller{
		protected $model;
		protected $view;
		
		function __construct($params){
			parent::__construct($params);
			$this->model=new mDash();
			$this->view= new vDash();
			
			//echo 'Hello controller!';
		}
		function home(){
			//Coder::codear($this->conf);
		}

		function utf8_string_array_encode(&$array){
		$func = function(&$value,&$key){
		    if(is_string($value)){
		       $value = utf8_encode($value);
		    } 
		    if(is_string($key)){
		        $key = utf8_encode($key);
		    }
		    if(is_array($value)){
		        utf8_string_array_encode($value);
		    }
		    };
		    array_walk($array,$func);
		    return $array;
		}

		function mostrar_datos()
		{
			$resultado=$this->model->select_users();
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

		function editarusuario()
		{
			if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['telefono']) && isset($_POST['foto_perfil'])
				&& isset($_POST['rol']) && isset($_POST['poblacion']) && isset($_POST['pais'])) {
				$id_user=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
         		$nombre=filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
         		$email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING); 
         		$telefono=filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING); 
         		$foto_perfil=filter_input(INPUT_POST, 'foto_perfil', FILTER_SANITIZE_STRING); 
         		$rol=filter_input(INPUT_POST, 'rol', FILTER_SANITIZE_STRING); 
         		$poblacion=filter_input(INPUT_POST, 'poblacion', FILTER_SANITIZE_STRING); 
         		$pais=filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_STRING); 

         		$resultado = $this->model->update_users();
         		if ($resultado == true) {
         			$output = true;
         			$this->ajax_set($output);
         		}
         		else
         		{
         			return false;
         		}
			}
		}

		function eliminarusuario()
		{
			if (isset($_POST['id'])) {
				$id_user=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

				$resultado = $this->model->delete_users();
				if ($resultado == true) {
         			$output = true;
         			$this->ajax_set($output);
         		}
         		else
         		{
         			return false;
         		}
			}
		}

    }
