<div class="container">
	<div id="users_u">
	</div>
	<center>
		<article style="background-color: white;
						vertical-align: middle;
					    width: 90%;
					    padding-top: 2%;
					    border: 1px solid grey;
					    margin-top: 2%;" class="insertar_usuario_art">
			<form class="insert_form" action="<?=APP_W.'dashboard/insertarusuario'; ?>" method="post">
			<h3 style="margin-bottom:2%; text-align: initial; margin-left: 5%">Insertar nuevo usuario</h3>
			<input id="Id_u" type="text" name="id_u" value="" class="nothing" style="width:10%"  placeholder="ID">
			<input id="Nombre_u" type="text" name="nombre_u" value="" class="nothing" style="width:10%"  placeholder="Nombre">
			<input id="Email_u" type="text" name="email_u" value="" class="nothing" style="width:10%"  placeholder="Email">
			<input id="Telefono_u" type="text" name="telefono_u" value="" class="nothing" style="width:10%"  placeholder="Telefono">
			<input id="Foto_perfil_u" type="text" name="foto_perfil_u" value="" class="nothing" style="width:10%"  placeholder="Foto perfil">
			<input id="Rol_u" type="text" name="rol_u" value="" class="nothing" style="width:10%"  placeholder="Rol">
			<input id="Pass_u" type="text" name="pass_u" value="" class="nothing" style="width:10%"  placeholder="Pass">
			<input id="Poblacion_u" type="text" name="poblacion_u" value="" class="nothing" style="width:10%"  placeholder="Poblacion">
			<input id="Pais_u" type="text" name="pais_u" value="" class="nothing" style="width:10%"  placeholder="Pais"><br>
				<input type="submit" id="insert_bd" value="Insertar">
			</form>
		</article>


		<article style="background-color: white;
						vertical-align: middle;
					    width: 90%;
					    padding-top: 2%;
					    border: 1px solid grey;
					    margin-top: 2%;" class="insertar_usuario_art">

			<form class="delete_form" action="<?=APP_W.'dashboard/eliminarusuario'; ?>" method="post">
			<h3 style="margin-bottom:2%; text-align: initial; margin-left: 5%">Eliminar usuario existente</h3>
			<input id="ID_del" type="text" name="id" value="" class="nothing" style="width:10%; text-align: initial; margin-right: 79%; " 
			 placeholder="ID"><br>
			 <input type="button" id="delete_bd" value="Eliminar" style="margin-top: 1%">
			 </form>
		</article>
		</center>
		
</div>