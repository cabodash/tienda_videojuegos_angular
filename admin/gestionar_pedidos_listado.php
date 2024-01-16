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
            $empezando = true;
            foreach ($pedidos as $p => $pedido) {
                $id_pedido = $pedido["id"];
            ?>
                <div class="pedido">
                    <?php if ($id_pedido != $id_pedido_anterior) {
                        if (!$empezando) {
                            echo "</div>"; //Cierra el div de productos anteriores
                            echo "</div>"; //Cierra el div de pedido
                        }
                        $empezando = false;
                    ?>
                        <div class="cont-datos-usuario" style="margin: 10px;">
                            <p>Nombre:
                                <?= $pedido["nombre"] ?>
                            </p>
                            <p>Apellidos:
                                <?= $pedido["apellidos"] ?>
                            </p>
                            <p>Direccion:
                                <?= $pedido["direccion"] ?>
                            </p>
                            <p>Nº tarjeta:
                                <?= $pedido["tarjeta"] ?>
                            </p>
                        </div>
                        <div class="">
                    <?php } ?>

                    <div class="item-producto-pedido">
                        <div>
                            <p>Nombre:
                                <?= $pedido["nombre"] ?>
                            </p>
                            <p>Precio:
                                <?= $pedido["precio"] ?>
                            </p>
                            <p>Descripcion:
                                <?= $pedido["descripcion"] ?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php
                $id_pedido_anterior = $id_pedido;
            }
            if (!$empezando) {
                echo "</div>"; //Cierra el ultimo div de productos anteriores
                echo "</div>"; //Cierra el div del ultimo pedido
            }
            ?>
        </div>
    </div>


</body>

</html>