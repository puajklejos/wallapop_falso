
	<div class="container">
		<article id="art_log">
			<div id="caja_login" style="flex-direction: column;">
			<center>
			<form action="<?= APP_W.'home/login_ajax'; ?>" method="post" class="ajax_method" style="width: 100%">
			<h2>Iniciar sesión en Outlet</h2><br>
			<h4 id="bad_login">Su usuario no existe</h4>
		      	<input type="text" id="usr_a" name="user_ajax" placeholder="Usuario registrado"></br>
		     	<input type="password" id="pass_a" name="pass_ajax" placeholder="Contraseña"></br>
		    	<input type="submit" value="Iniciar sesión" id="logsend"><label id="olv_pass"><a href="#" class="no_espec">¿Olvidaste tu contraseña?</a></label>
		    	<!--<a href="<?= APP_W.'registro'; ?>"><input type="button" id="register" value="Register "></a>-->
			</form>
			</center>
			<div id="nuevo_reg">
				<label id="registrarse">¿Eres nuevo en Outlet? <a href="<?= APP_W.'registro'; ?>" class="no_espec">Regístrate ahora >></a></label>
			</div>
	</div>

		</article>
	</div>