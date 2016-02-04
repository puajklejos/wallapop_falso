<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
    <link rel="stylesheet"  type="text/css" href="<?= APP_W.'pub/css/m.css'; ?>">
    <script src="<?= APP_W.'pub/js/jquery.min.js'; ?>"></script>
    <script src="<?= APP_W.'pub/js/app.js'; ?>"></script>
</head>
<body>
	<header>
		<h1> View -<?= $title; ?></h1>
		<div id="caja_register">
		<form action="home/login" method="post">
			Usuario: <input type="text" id="usr" name="usuario"></br>
			Contraseña: <input type="password" id="pass" name="password"></br>
		<input type="submit" id="login" value="Log In">
		<input type="button" id="register" value="Register ">
		</form>
		</div>
	</header>
	
