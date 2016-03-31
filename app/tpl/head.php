<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
    <link rel="stylesheet"  type="text/css" href="<?= APP_W.'pub/css/m.css'; ?>">
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!--<script src="<?= APP_W.'pub/js/jquery.min.js'; ?>"></script>-->
    <script src="<?= APP_W.'pub/js/app.js'; ?>"></script>
</head>
<body>
	<header>
	<?php
	if ((isset($_SESSION['rol_usr']) && $_SESSION['rol_usr']!=1) || (!isset($_SESSION['rol_usr']))) {
	echo '<div class="first_1">
			<h4 class="home">Inicio</h4>
		 </div>';
	}	

	if ((isset($_SESSION['rol_usr']) && $_SESSION['rol_usr']!=1) || (!isset($_SESSION['rol_usr']))) {
	echo '<div class="first_2">
			<h4 class="home">Nosotros</h4>
		 </div>';
	}	

	if (isset($_SESSION['rol_usr']) && $_SESSION['rol_usr']==1) {
	echo '<div class="first_3">
			<h4 class="home_admin"><a href='.APP_W.'home/redirect_dash id="dash">Edicion de usuarios</a></h4>
		 </div>';
	}	
	?>
			
		<?php		
			if (isset($_SESSION['usuario']) && $_SESSION['rol_usr']!=1) {
				if($_SESSION['foto_perf']==NULL)
				{
				echo '<div class="last">
					  <h4 class="home">';
				echo '<img src="pub\images\pre.png" id="img_user">';
				echo "<label id=name_usr>".$_SESSION['usuario']."<h5><a href='".APP_W."home/destroy_session'; id='desconexion'>Desconectar</a></h5></label>";
				echo '</h4></div>';
					  
				}
				else
				{
				echo '<div class="last">
					  <h4 class="home">';
				echo '<img src="'.$_SESSION['foto_perf'].'" id="img_user">';
				echo "<label id=name_usr>".$_SESSION['usuario']."<h5><a href='".APP_W."home/destroy_session'; id='desconexion'>Desconectar</a></h5></label>";
				echo '</h4></div>';
				}
			}
			else
			{
			if (isset($_SESSION['usuario'])) {
				if($_SESSION['foto_perf']==NULL)
				{
				echo '<div class="last" style="">
					  <h4 class="home" style="">';
				echo '<img src="pub\images\pre.png" id="img_user">';
				echo "<label id=name_usr_admin>".$_SESSION['usuario']."<h5><a href='".APP_W."home/destroy_session'; id='desconexion'>Desconectar</a></h5></label>";
				echo '</h4></div>';
				}
				else
				{
				echo '<div class="last" style="">
					  <h4 class="home" style="">';
				echo '<img src="'.$_SESSION['foto_perf'].'" id="img_user">';
				echo "<label id=name_usr>".$_SESSION['usuario']."<h5><a href='".APP_W."home/destroy_session'; id='desconexion'>Desconectar</a></h5></label>";
				echo '</h4></div>';
				}
			}
		}
		?>

		</h4>
	</div>
	

</header>