<?php
session_start();
require "../librerias_php/setup_red_bean.php";

$pedidoRecibido = json_decode( file_get_contents("php://input") );


$pedido = R::dispense("pedidos");
$pedido->nombre = $pedidoRecibido->nombre;
$pedido->apellidos = $pedidoRecibido->apellidos;
$pedido->direccion = $pedidoRecibido->direccion;
$pedido->tarjeta = $pedidoRecibido->tarjeta;
$pedido->comentario = $pedidoRecibido->comentario;
$id_pedido = R::store($pedido);

//registro los productos del carrito asociandolos a la id de pedido registrado
// y despues borro el carrito

foreach( $_SESSION["carrito"] as $pc ){
    $producto_carrito = R::dispense("productopedido");
    $producto_carrito->id_pedido = $id_pedido;
    $producto_carrito->id_producto = $pc[0];
    $producto_carrito->cantidad = $pc[1];
    R::store($producto_carrito);
}

//vaciar el carrito
$_SESSION["carrito"] = array();

echo json_encode("ok");