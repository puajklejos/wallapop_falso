<?php

	class mUser extends Model{

		function __construct(){
			parent::__construct();
			
		}


	function cargar_anuncios()
	{
		  try {
              $sql = "SELECT * FROM anuncios";
              $this->query($sql);
              $this->execute();
              return $this->resultset();
        } catch (PDOException $e) {
            echo "Error";
        }
        return false;
    }
}