<?php
//Si queremos usar la sesion, la siguiente instruccion debe ser la rimera en este archivo
//Si dejaramos incluso un espacio en blanco antes de <?php la sesion no funcionaria
session_start();

//Para obtener la informacion mandada por post a este php
$jsonRecibido = json_decode(file_get_contents("php://input"));
if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = array();
}

//Lo que guardamos en el array $_SESSION["carrito"] es un array por cada producto agregado al carrito
//1ªpos tiene el id, 2ª pos la cantidad
$productoCarritoEnSesion = false;
for ($i = 0; $i < count($_SESSION["carrito"]); $i++) {
    // Check if the product id in the session cart matches the id received from the client
    if ($_SESSION["carrito"][$i][0] == $jsonRecibido->id) {
        // If the product id matches, set the flag to true
        $productoCarritoEnSesion = true;
        $_SESSION["carrito"][$i][1] += $jsonRecibido->cantidad;
    }
}

if(!$productoCarritoEnSesion){
    array_push($_SESSION["carrito"], array($jsonRecibido->id, $jsonRecibido->cantidad));
}

echo json_encode("ok");
