<?php

	class mAnuncio extends Model{

		function __construct(){
			parent::__construct();
			
		}

function ins_anuncio($titulo,$subtitulo,$descripcion,$url){

   try{
        $sql="SELECT * FROM anuncios WHERE titulo=? OR subtitulo=? AND user=?";
        $this->query($sql);
        $this->bind(1,$titulo);
        $this->bind(2,$subtitulo);
        $this->bind(3, $_SESSION['id_usr']);
        $this->execute();
        if($this->rowCount()==1){
             return TRUE;
        }
        else {
        	//Añadimos el anuncio
        	$this->begintransaction();
        	if(empty($titulo) || empty($subtitulo) || empty($descripcion))
        		{
        		$this->canceltransaction();
        		}
        	else
        		{ 
        			$insert = "INSERT INTO anuncios(titulo, imagen1, imagen2, imagen3, user, descripcion, subtitulo) VALUES(?, ?, ?, ?, ?, ?, ?)";
        			$this->query($insert);
			        $this->bind(1, $titulo);
			        $this->bind(2, $url);
			        $this->bind(3, null);
			        $this->bind(4, null);
			        $this->bind(5, $_SESSION['id_usr']);
			        $this->bind(6, $descripcion);
			        $this->bind(7, $subtitulo);
			        $this->execute();
			        $this->endtransaction();
        		}
        	return FALSE;
        }

        }catch(PDOException $e){
             echo "Error:".$e->getMessage();
        }

  }
}
?>