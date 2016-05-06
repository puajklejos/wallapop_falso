<?php

	require 'vendor/autoload.php';
	require 'db.php';
	\Slim\Slim::registerAutoloader();
	$app = new \Slim\Slim();

	//definir rutas
	/*$app->get('/hello/:name', function($name){
		echo "<h1>Hello, ".$name."</h1>";
	});*/

	//$app->get('/hello/:name', 'hello');
	//$app->get('/', 'hello');
	$app->get('/users', 'getUsers');
	$app->post('/users', 'createUser');
	$app->run();

	/*function hello($name=null)
	{
		if ($name!=null) {
			echo "Hello, ".$name;
		}else echo "Hello";
	}*/

	function getUsers()
	{
		$sql = "SELECT * FROM users";
		$dbh=getDB();
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		$result=$stmt->fetchAll();
		//header('Content-Type', 'applicaction/json');
		$longitud = count($result);
		$i=0;
		//echo $longitud;

		echo "<table border=1>";
		echo "<tr>";
			echo "<th>Nombre</th>";
			echo "<th>Email</th>";
			echo "<th>Telefono</th>";
			echo "<th>Foto perfil</th>";
			echo "<th>Rol</th>";
			echo "<th>Password</th>";
			echo "<th>Poblacion</th>";
			echo "<th>Pais</th>";
		echo "</tr>";

			foreach ($result as $valor) {
				echo "<tr>";
				echo "<td>".$valor[1]."</td>";
				echo "<td>".$valor[2]."</td>";
				echo "<td>".$valor[3]."</td>";
				echo "<td>".$valor[4]."</td>";
				echo "<td>".$valor[5]."</td>";
				echo "<td>".$valor[6]."</td>";
				echo "<td>".$valor[7]."</td>";
				echo "<td>".$valor[8]."</td>";
				echo "</tr>";
			}
		echo "</table>";

		//echo json_encode($result);
	}

	function createUser()
	{
		$sql = "INSERT INTO users(nombre, email, telefono, foto_perfil, rol, password, poblacion, pais) VALUES(:nombre, :email, :telefono, :foto_perfil, :rol, :password, :poblacion, :pais)";
		$request = \Slim\Slim::getInstance()->request();
		$user = $request->params();
		$x1=$user["nombre"];
		$x2=$user["email"];
		$x3=$user["telefono"];
		$x4=$user["foto_perfil"];
		$x5=$user["rol"];
		$x6=$user["pass"];
		$x7=$user["poblacion"];
		$x8=$user["pais"];

		/*try {*/
			$dbh = getDB();

			$stmt= $dbh->prepare($sql);
			$stmt->bindParam(':nombre', $x1);
			$stmt->bindParam(':email', $x2);
			$stmt->bindParam(':telefono', $x3);
			$stmt->bindParam(':foto_perfil', $x4);
			$stmt->bindParam(':rol', $x5);
			$stmt->bindParam(':password', $x6);
			$stmt->bindParam(':poblacion', $x7);
			$stmt->bindParam(':pais', $x8);

			$stmt->execute();
			/*$dbh=null;*/
			/*echo json_encode($user);
		} catch (PDOException $e) {
			echo "Error";
		}*/
	}


?>