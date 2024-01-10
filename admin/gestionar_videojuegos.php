<?php

require "../librerias_php/setup_red_bean.php";


if(isset($_GET["idBorrar"])){
    R::exec("DELETE FROM videojuegos WHERE id = ?", [$_GET["idBorrar"]]);
    unlink("../images/".$_GET["idBorrar"].".jpg");
}

//Pedimos los videojuegos con redbean para listarlos
$videojuegos = R::getAll("SELECT * FROM videojuegos");

require("listar_videojuegos.php");

