<?php

require "../librerias_php/setup_red_bean.php";

$videojuego = R::dispense("videojuegos");

$videojuego->nombre = $_POST["nombre"];
$videojuego->descripcion = $_POST["descripcion"];
$videojuego->precio = $_POST["precio"];

$id = R::store( $videojuego );
move_uploaded_file( $_FILES["fotoPortada"]["tmp_name"],"../images/videojuegos/$id.jpg");

include("registro_ok.php");
