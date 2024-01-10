<?php

//este php se incluye en gestionar_pedidos.php
//Aqui simplemente listamos lo obtenido en $pedidos

//en este caso concreto como excepcion
//vamos a juntar aqui en un mismo archivo
//codigo de vista y codigo de lenguaje servidor

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include ("menu.php"); ?>

    <div>
        <h2>Pedidos realizados en la tienda con angular</h2>
    </div>
    <?php 
    $id_pedido = 0;
    $id_pedido_anterior = 0;
    foreach ($pedidos as $p => $pedido) {
        $id_pedido = $pedido["id"];
    ?>
    <?php if($id_pedido != $id_pedido_anterior ){ ?>
        <div style="margin: 10px;">
            <p>Nombre: <?=$pedido["nombre"]?></p>
            <p>Apellidos: <?=$pedido["apellidos"]?></p>             a
            <p>Direccion: <?=$pedido["direccion"]?></p>
            <p>Nº tarjeta: <?=$pedido["tarjeta"]?></p>
        </div>
    <?php }?>

        <div style="margin: 10px; background-color: darkgray;">
            <h3>Productos del pedido</h3>
             <div>
             <p>Nombre: <?=$pedido["nombre"]?></p>
             <p>Precio: <?=$pedido["precio"]?></p>
             <p>Descripcion: <?=$pedido["descripcion"]?></p>
             </div>
        </div>

    <?php
    $id_pedido_anterior = $id_pedido;
    }
    ?>
    
</body>
</html>