<?php

require "../librerias_php/setup_red_bean.php";

//Pedimos los videojuegos con redbean para listarlos
$videojuegos = R::getAll("SELECT * FROM videojuegos");

require("listar_videojuegos.php");

