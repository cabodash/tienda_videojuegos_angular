<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/admin.css">
	<link rel="stylesheet" href="css/formularios_admin.css">
	<title>Registrar Videojuego</title>
</head>

<body>
	<?php include("menu.php") ?>

	<form class="formulario" action="registrar_producto.php" method="post" enctype="multipart/form-data">
		<h2>Registrar Videojuego</h2>

		<img class="preview videojuego-img" id="preview-img" src="images/default_game.png" alt="Imagen por defecto">

		<label class="fileInput">
			<span>Foto Portada: Selecciona o arrastra una Foto</span>
			<input type="file" name="fotoPortada" id="fotoPortada" />
		</label>

		<div class="input-box no-error">
			<input type="text" name="nombre" required minlength="2" maxlength="20">
			<label for="nombre">Nombre</label>
		</div>

		<div class="textarea-box no-error">
			<textarea name="descripcion" required minlength="2" maxlength="200"></textarea>
			<label for="descripcion">Descripcion</label>
		</div>

		<div class="input-box no-error">
			<input type="number" step=".01" name="precio" required pattern="[0-9]+(,[0-9])?" />
			<label for="precio">Precio</label>
		</div>

		<div class="input-box no-error">
			<input type="text" step=".01" name="genero" required minlength="2" maxlength="30" />
			<label for="genero">Genero</label>
		</div>

		<div class="input-box no-error">
			<input type="text" step=".01" name="desarrollador" required minlength="2" maxlength="30" />
			<label for="desarrollador">Desarrollador</label>
		</div>

		<input type="date" value="2017-01-01" min="2005-01-01" name="fecha_lanzamiento" />

		<input class="btn-enviar" type="submit" />
	</form>

	<script src="js/formulario_inputs.js"></script>
	<script src="js/image_preview.js"></script>
</body>

</html>