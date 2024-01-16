<?php
session_start();

require "../librerias_php/setup_red_bean.php";

$sql = "SELECT p.id, p.nombre as nombre_pedido, p.apellidos, p.direccion, p.tarjeta, p.comentario, v.nombre as nombre_videojuego, v.precio, v.descripcion 
        FROM videojuegos as v, productopedido as pp, pedidos as p 
        WHERE p.id =  pp.id_pedido and v.id = pp.id_producto 
        ORDER BY p.id DESC";


$pedidos = R::getAll($sql);

require"gestionar_pedidos_listado.php";