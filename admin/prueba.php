<?php

echo "Hola desde php";

//Vamos a usar redbean en php para hacer un registro en base de datos
include "rb-mysql.php";


$videojuego = R::dispense("videojuegos");
$videojuego ->nombre = "Red dead Redemption";
$videojuego ->descripcion = "Rockstar Games";
$videojuego ->precio = 33.33;
$id_generado = R::store($videojuego);

echo "registro de prueba realizado correctamente con la id:  {$id_generado}";
