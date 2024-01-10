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


		<!-- <label class="fileInput">
			<span>Video Portada: Selecciona o arrastra un Video</span>
			<input type="file" th:field="*{videoSubido}">
		</label> -->


		<div class="input-box no-error">
			<input type="text" name="nombre">
			<label for="nombre">Nombre</label>
		</div>

		<div class="textarea-box no-error">
			<textarea name="descripcion" maxlength="200"></textarea>
			<label for="descripcion">Descripcion</label>
		</div>

		<div class="input-box no-error">
			<input type="number" step=".01" name="precio" />
			<label for="precio">Precio</label>
		</div>

		<!-- Fecha de Lanzamiento: <input type="date" name="fechaLanzamiento" /> -->

		<!-- <div class="input-box no-error">
			<input type="text" name="desarrollador" />
			<label for="desarrollador">Desarrollador</label>
		</div>

		<div class="input-box no-error">
			<input type="number" step=".01" name="puntuacion" />
			<label for="puntuacion">Puntuacion</label>
		</div> -->

		<!-- <div>
			Generos:
			<div th:each="genero : ${generos}">
				<input type="checkbox" th:value="${genero.id}" name="generosSeleccionados" th:checked="${nuevoVideojuego.generos != null && nuevoVideojuego.generos.contains(genero)}"/>
				<label th:text="${genero.nombre}"></label>
			</div>
		</div>

		<div>
			Plataformas:
			<div th:each="plataforma : ${plataformas}">
				<input type="checkbox" th:value="${plataforma.id}" name="plataformasSeleccionadas" th:checked="${nuevoVideojuego.plataformas != null && nuevoVideojuego.plataformas.contains(plataforma)}"/>
				<label th:text="${plataforma.nombre}"></label>
			</div>
		</div> -->
		<input class="btn-enviar" type="submit" />
	</form>
</body>

</html>