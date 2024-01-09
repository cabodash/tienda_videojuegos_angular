<?php
session_start();
if(isset($_SESSION["carrito"])){
    require"../librerias_php/setup_red_bean.php";
    $ids = array();
    $cantidades = array();
    foreach($_SESSION["carrito"] as $p ){
        array_push($ids, $p[0]);
        array_push($cantidades, $p[1]);
    }
    $ids_sql = implode(",",$ids);
    $sql = "SELECT * FROM videojuegos WHERE id IN ($ids_sql)";
    $videojuegos = R::getAll($sql);
    $respuesta = array();
    for ($i = 0; $i < count($videojuegos); $i++) {
        array_push($respuesta, array("videojuego" =>$videojuegos[$i], "cantidad" =>$cantidades[$i]));
    }
    echo json_encode($respuesta);
}else{
    echo json_encode(array());
}