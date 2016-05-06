<?php

	class mDash extends Model{

		function __construct(){
			parent::__construct();
			
		}

    function select_users()
    {
        try {
              $sql = "SELECT id_user, nombre, email, telefono, foto_perfil, rol, poblacion, pais FROM users";
              $this->query($sql);
              $this->execute();
              return $this->resultset();
        } catch (PDOException $e) {
            echo "Error";
        }
        return false;
    }

    function update_users($id_user, $nombre, $email, $telefono, $foto_perfil, $rol, $poblacion, $pais)
    {
        try {
          $sql = "UPDATE users SET ?, ?, ?, ?, ?, ?, ? WHERE ?";
          $this->query($sql);
          $this->bind(1,$nombre);
          $this->bind(2,$email);
          $this->bind(3,$telefono);
          $this->bind(4,$foto_perfil);
          $this->bind(5,$rol);
          $this->bind(6,$poblacion);
          $this->bind(7,$pais);
          $this->bind(8,$id_user);
          $this->execute();
          return true;

        } catch (PDOException $e) {
          echo "Error";
        }
      return false;
    }

    function delete_users($id_user)
    {
      try {
        $sql = "DELETE FROM users WHERE id_user=?";
        $this->query($sql);
        $this->bind(1,$id_user);
        $this->execute();
        return true;
      } catch (PDOException $e) {
        echo "Error";
      }
      return false;
    }

    function insertar_users($id_user, $nombre, $email, $telefono, $foto_perfil, $rol, $password, $poblacion, $pais)
    {
       try {
          $sql = "INSERT INTO users VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
          $this->query($sql);
          $this->bind(1,$id_user);
          $this->bind(2,$nombre);
          $this->bind(3,$email);
          $this->bind(4,$telefono);
          $this->bind(5,$foto_perfil);
          $this->bind(6,$rol);
          $this->bind(7, $password);
          $this->bind(8,$poblacion);
          $this->bind(9,$pais);
          //$this->bind(8,$id_user);
          $this->execute();
          return $sql;

        } catch (PDOException $e) {
          echo "Error";
        }
      return false;
    }

    function valorar_m($id)
    {
      $id = $id+1;
        try {
          //Puntuacion
          $query_cont = "SELECT usuario FROM valoraciones WHERE anuncio=:id AND usuario=".$_SESSION['id_usr'];
          $this->query($query_cont);
          $this->bind(":id",$id);
          $this->execute();
          $puntuacion = $this->rowCount();

          $query_anun = "SELECT anuncio FROM valoraciones WHERE anuncio=:id";
          $this->query($query_anun);
          $this->bind(":id",$id);
          $this->execute();
          $likes = $this->rowCount();

          //return $_SESSION['id_usr'];

          if($puntuacion<1)
          {
                $query = "INSERT INTO valoraciones(puntuacion, anuncio, usuario) VALUES(1, ?, ?)";
                //$this->bind(1,1);
                $this->query($query);
                $this->bind(1,$id);
                $this->bind(2,$_SESSION['id_usr']);
                $this->execute();
                $likes= $likes + 1;
                return "Gracias por su valoracion su puntuacion es: ".$likes;
          }
          else
          {
            return "Ya has valorado, su puntuacion es: ".$likes;
          }


            //return $puntuacion;
            //return $output;

        } catch (PDOException $e) {
          echo "Error";
        }
      return false;
    }

	}