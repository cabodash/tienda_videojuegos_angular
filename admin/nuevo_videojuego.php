<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar Videojuego</title>
</head>

<body>
	<?php include("menu.php") ?>

	<form class="formulario" action="registrar_producto.php" method="post" enctype="multipart/form-data">
		<h2>Registrar Videojuego</h2>


		<label class="fileInput">
			<span>Foto Portada: Selecciona o arrastra una Foto</span>
			<input type="file" name="fotoPortada" />
		</label>

		<div class="input-box no-error">
			<input type="text" name="nombre" required minlength="2" maxlength="20">
			<label for="nombre">Nombre</label>
		</div>

		<div class="textarea-box no-error">
			<textarea name="descripcion"  required minlength="2" maxlength="200"></textarea>
			<label for="descripcion">Descripcion</label>
		</div>

		<div class="input-box no-error">
			<input type="number" step=".01" name="precio" required pattern="[0-9]+(,[0-9])?"/>
			<label for="precio">Precio</label>
		</div>
		<input class="btn-enviar" type="submit" />
	</form>
</body>

</html>