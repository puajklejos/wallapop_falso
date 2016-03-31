
	<div class="container">
		<!--<form action="<?= APP_W.'registro/register'; ?>" method="post" id="form_register"></br>
		<center><h2>Nuevo usuario</h2></center></br>
			Usuario: <input type="text" id="usr_nuevo" name="usuario_nuevo"></br>
			Contraseña: <input type="password" id="pass_nuevo" name="password_nuevo"></br>
			País de residéncia: <input type="text" id="pais_nuevo" name="pais_nuevo"></br>
			Población: <input type="text" id="pobl_nuevo" name="pobl_nuevo"></br>
			Telefono: <input type="text" id="tlf_nuevo" name="tlf_nuevo"></br>
			Email: <input type="text" id="email_nuevo" name="email_nuevo"></br>
		<input type="submit" value="Register">
		</form>-->
		<article id="art_reg">
		<div id="caja_register">
		<form action="<?= APP_W.'registro/register_ajax'; ?>" method="post" class="ajax_method1"></br>
		<center><h2 style="margin-bottom: 5%;">¡Únase de forma gratuita </br>a nuestra comunidad!</h2></center>
			<label>Usuario:</label><input type="text" id="usr_nuevo" name="usuario_nuevo" required></br>
			Contraseña: <input type="password" id="pass_nuevo" name="password_nuevo" required></br>
			País de residéncia: <input type="text" id="pais_nuevo" name="pais_nuevo" required></br>
			Población: <input type="text" id="pobl_nuevo" name="pobl_nuevo" required></br>
			Telefono: <input type="text" id="tlf_nuevo" name="tlf_nuevo" required></br>
			Email: <input type="text" id="email_nuevo" name="email_nuevo" required></br>
			Foto de perfil:  <input type="text" id="foto_perfil" name="foto_p" placeholder="URL"></br>
		<input type="submit" value="Register" id="reg_button">
		</form>
		</div>

		</article>
	</div>

