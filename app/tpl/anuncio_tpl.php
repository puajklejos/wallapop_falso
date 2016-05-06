
	<div class="container">
		<article id="art_anun">
		<div id="caja_anun" style="flex-direction: column;">
			<center>
			<form action="<?= APP_W.'anuncio/anuncio'; ?>" method="post" class="ajax_method2">
			<h2 style="margin-bottom: 7%">Nuevo anuncio</h2>

			<label>Titulo</label><br> <input type="text" name="titulo" id="titulo_id" required><br>
			<label>Subtitulo</label><br> <input type="text" name="subtitulo" id="subtitulo_id" required><br>
			<label>Descripción</label><br><textarea name="descripcion" id="descripcion_b" required></textarea><br><br>
			<label>URL imagen</label><br><input type="text" name="url" id="url" required placeholder="URL"></input><br><br>
			<input type="submit" value="Nuevo anuncio!" id="logsend">
			</form>
			</center>
		</center>
		</article>
	</div>
