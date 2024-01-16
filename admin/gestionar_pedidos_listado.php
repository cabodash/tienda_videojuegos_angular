<?php

//este php se incluye en gestionar_pedidos.php
//Aqui simplemente listamos lo obtenido en $pedidos

//en este caso concreto como excepcion
//vamos a juntar aqui en un mismo archivo
//codigo de vista y codigo de lenguaje servidor

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include("menu.php"); ?>

    <div class="cont-listado">

        <div>
            <h2>Pedidos realizados en la tienda con angular</h2>
        </div>
        <div class="contenedor-pedidos">
            <?php
            $id_pedido = 0;
            $id_pedido_anterior = 0;
            $primer_pedido = true;
            foreach ($pedidos as $p => $pedido) {
                $id_pedido = $pedido["id"];
                if ($id_pedido != $id_pedido_anterior) {
                    if($primer_pedido){          
                        $primer_pedido = false;
                    }else{
                        echo "</div>"; //Este div seria el cierre del padido anterior en caso de que
                                       //este pedido sea diferente al anterior
                    }
            ?>
            <div class="pedido">
                <div class="cont-datos-usuario" style="margin: 10px;">
                    <p>Nombre: <?= $pedido["nombre_pedido"] ?></p>
                    <p>Apellidos:  <?= $pedido["apellidos"] ?> </p>
                    <p>Direccion:  <?= $pedido["direccion"] ?></p>
                    <p>Nº tarjeta: <?= $pedido["tarjeta"] ?> </p>
                    <p>Comentario: <?= $pedido["comentario"] ?> </p>

                </div>
                <?php } ?>

                <div class="item-producto-pedido">
                    <p>Nombre: <?= $pedido["nombre_videojuego"] ?></p>
                    <p>Precio: <?= $pedido["precio"] ?>€</p>
                    <p>Descripcion: <?= $pedido["descripcion"] ?></p>
                </div>

                <?php
                $id_pedido_anterior = $id_pedido;
                }
                ?>
        <!--</div> -->    <!--/Este div seria el cierre de el contenedor pedido, pero si en el siguiente
                                ciclo del bucle es el mismo pedido, no habria que cerrarlo. Se cerrará cuando
                                detecte que el pedido cambia al principio en el if del php/  -->
            </div> <!-- Este es el cierre final de fuera del bucle, necesario para que la 
                        estructura de la pagina web se mantenga perfecta-->
    </div>


</body>

</html>