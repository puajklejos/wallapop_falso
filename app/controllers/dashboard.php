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

				$resultado = $this->model->delete_users($id_user);
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

		function insertarusuario()
		{
			if (!empty($_POST['id_u']) && !empty($_POST['nombre_u']) && !empty($_POST['email_u']) && !empty($_POST['telefono_u']) && !empty($_POST['foto_perfil_u']) && !empty($_POST['rol_u'])
				&& !empty($_POST['pass_u']) && !empty($_POST['poblacion_u']) && !empty($_POST['pais_u'])) {
				$id_user=filter_input(INPUT_POST, 'id_u', FILTER_SANITIZE_STRING);
         		$nombre=filter_input(INPUT_POST, 'nombre_u', FILTER_SANITIZE_STRING);
         		$email=filter_input(INPUT_POST, 'email_u', FILTER_SANITIZE_STRING); 
         		$telefono=filter_input(INPUT_POST, 'telefono_u', FILTER_SANITIZE_STRING); 
         		$foto_perfil=filter_input(INPUT_POST, 'foto_perfil_u', FILTER_SANITIZE_STRING); 
         		$rol=filter_input(INPUT_POST, 'rol_u', FILTER_SANITIZE_STRING); 
         		$pass=filter_input(INPUT_POST, 'pass_u', FILTER_SANITIZE_STRING); 
         		$poblacion=filter_input(INPUT_POST, 'poblacion_u', FILTER_SANITIZE_STRING); 
         		$pais=filter_input(INPUT_POST, 'pais_u', FILTER_SANITIZE_STRING); 

         		/*echo $id_user.'<br>';
         		echo $nombre.'<br>';
         		echo $email.'<br>';
         		echo $telefono.'<br>';
         		echo $foto_perfil.'<br>';
         		echo $rol.'<br>';
         		echo $pass.'<br>';
         		echo $poblacion.'<br>';
         		echo $pais.'<br>';*/


				$resultado = $this->model->insertar_users($id_user, $nombre, $email, $telefono, $foto_perfil, $rol, $pass, $poblacion, $pais);
				if ($resultado == true) {
         			//$output=array('redirect'=>APP_W.'dashboard');
            		//$this->ajax_set($output);
            		header('Location:'.APP_W.'dashboard');
         			//$this->ajax_set($output);
         		}
         		else
         		{
         			return false;
         		}
			}
		}

		function valorar()
		{
			$id = $_POST['id'];
			//echo "HHHHHHHHHHHHHHHHHHHHHHHHHHHHH";
			$resultado = $this->model->valorar_m($id);
         			$this->ajax_set($resultado);
		}



    }
