<?php

	class mHome extends Model{

		function __construct(){
			parent::__construct();
			
		}

	/*function login($usuario,$password){
 	 try{
     $sql="SELECT * FROM users WHERE nombre=? AND password=?";
     $this->query($sql);
     $this->bind(1,$usuario);
     $this->bind(2,$password);
     $this->execute();
     if($this->rowCount()==1){
           Session::set('islogged',TRUE);
           Session::set('usuario',$usuario);
           return TRUE;
     }
     else {
         Session::set('islogged',FALSE);
          return FALSE;}
    }catch(PDOException $e){
       echo "Error:".$e->getMessage();
   	}
	}*/

  function login_ajax($usuario_ajax,$password_ajax){

   try{
        $sql="SELECT * FROM users WHERE nombre=? AND password=?";
        $this->query($sql);
        $this->bind(1,$usuario_ajax);
        $this->bind(2,$password_ajax);
        $this->execute();
        if($this->rowCount()==1){
             $dades=$this->single();
             Session::set('foto_perf', $dades[0]['foto_perfil']);
             Session::set('id_usr', $dades[0]['id_user']);
             Session::set('rol_usr', $dades[0]['rol']);
             Session::set('islogged',TRUE);
             Session::set('usuario', $usuario_ajax);
             return TRUE;
        }
        else {
             Session::set('islogged',FALSE);
             return FALSE;}
        }catch(PDOException $e){
             echo "Error:".$e->getMessage();
        }

  }

	}
?>