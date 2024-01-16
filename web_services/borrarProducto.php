<?php
//Si queremos usar la sesion, la siguiente instruccion debe ser la primera en este archivo
//Si dejaramos incluso un espacio en blanco antes de <?php la sesion no funcionaria
session_start();

//Para obtener la informacion mandada por post a este php
$jsonRecibido = json_decode(file_get_contents("php://input"));
if (!isset($_SESSION["carrito"])) {
    echo json_encode("El carrito está vacío");
    exit();
}

//Lo que guardamos en el array $_SESSION["carrito"] es un array por cada producto agregado al carrito
//1ªpos tiene el id, 2ª pos la cantidad
$productoCarritoEnSesion = false;
for ($i = 0; $i < count($_SESSION["carrito"]); $i++) {
    // Verificar si el id del producto en el carrito de la sesión coincide con el id recibido del cliente
    if ($_SESSION["carrito"][$i][0] == $jsonRecibido) {
        // Si el id del producto coincide, establecer la bandera en verdadero
        $productoCarritoEnSesion = true;
        array_splice($_SESSION["carrito"], $i, 0);
        array_splice($_SESSION["carrito"], $i, 1);
        break;
    }
}

if($productoCarritoEnSesion){
    echo json_encode("ok");
}
