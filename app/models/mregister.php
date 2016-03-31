<?php

	class mRegister extends Model{

		function __construct(){
			parent::__construct();
			
		}

	 /*function register($usuario,$password,$pais,$poblacion,$telefono,$email){
 	 try{
     $sql="SELECT * FROM users WHERE nombre=? AND password=?";
     $this->query($sql);
     $this->bind(1,$usuario);
     $this->bind(2,$password);
     $this->execute();
     if($this->rowCount()==1){
           return TRUE;
     }
     else {
     	//Añadimos el usuario
     	$insert = "CALL insert_user(?, ?, ?, ?, ?, ?)";
        $this->query($insert);
     	$this->bind(1, $usuario);
     	$this->bind(2, $email);
     	$this->bind(3, $telefono);
     	$this->bind(4, $password);
     	$this->bind(5, $poblacion);
     	$this->bind(6, $pais);
     	$this->execute();
     }

    }catch(PDOException $e){
       echo "Error:".$e->getMessage();
   	}
	}	*/

    function register_ajax($usuario,$password,$pais,$poblacion,$telefono,$email, $foto_p){
     try{
     $sql="SELECT * FROM users WHERE nombre=? AND password=?";
     $this->query($sql);
     $this->bind(1,$usuario);
     $this->bind(2,$password);
     $this->execute();
     if($this->rowCount()==1){
           return TRUE;
     }
     else {
        //Añadimos el usuario
        $insert = "CALL insert_user(?, ?, ?, ?, ?, ?, ?)";
        $this->query($insert);
        $this->bind(1, $usuario);
        $this->bind(2, $email);
        $this->bind(3, $telefono);
        $this->bind(4, $password);
        $this->bind(5, $poblacion);
        $this->bind(6, $pais);

        if(empty($foto_p))
        {
            $foto_p = "pub\images\pre.png";
        }  
        $this->bind(7, $foto_p);
        $this->execute();
     }

    }catch(PDOException $e){
       echo "Error:".$e->getMessage();
    }
    }

	}

?>