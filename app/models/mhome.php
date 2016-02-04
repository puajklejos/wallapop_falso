<?php

	class mHome extends Model{

		function __construct(){
			parent::__construct();
			
		}

	function login($usuario,$password){
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
	}	

 
	}