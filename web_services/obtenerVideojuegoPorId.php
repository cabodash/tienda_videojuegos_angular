<?php

require "../librerias_php/setup_red_bean.php";

$id = $_GET["id"];

$videojuego = R::getRow("SELECT * FROM videojuegos WHERE id = ? ", [$id]);

echo json_encode($videojuego);