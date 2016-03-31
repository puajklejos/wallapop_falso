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
          $sql = "UPDATE users SET nombre=?, email=?, telefono?, foto_perfil=?, rol=?, poblacion=?, pais=? WHERE id_user=?";
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
        $sql = "DELETE FROM users WHERE id=?";
        $this->query($sql);
        $this->bind(1,$id_user);
        $this->execute();
        return true;
      } catch (PDOException $e) {
        echo "Error";
      }
      return false;
    }

	}