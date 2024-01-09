<?php

//Emitir un listado de videojuegos en formato json
require "../librerias_php/setup_red_bean.php";

//Pedimos los videojuegos con redbean para listarlos
$videojuegos = R::getAll("SELECT * FROM videojuegos");

echo json_encode($videojuegos);
