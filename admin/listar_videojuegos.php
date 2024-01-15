<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Document</title>
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="cont-listado">
        <h2>Listado de videojuegos de la tienda</h2>


        <div class="contenedor-items">
            <?php
            foreach ($videojuegos as $v) {
                ?>
                <div class="item">
                    <img class="imagen-item" src="../images/videojuegos/<?= $v["id"] ?>.jpg">
                    <p>Nombre:
                        <?= $v["nombre"] ?>
                    </p>
                    <p>Descripcion:
                        <?= $v["descripcion"] ?>
                    </p>
                    <p>Precio:
                        <?= $v["precio"] ?>
                    €</p>
                    <p>Desarrollador:
                        <?= $v["desarrollador"] ?>
                    </p>
                    <p>Genero:
                        <?= $v["genero"] ?>
                    </p>
                    <p>Fecha de Lanzamiento:
                        <?= $v["fecha_lanzamiento"] ?>
                    </p>
                    <a class="btn-primary" onclick="return confirm('estas seguro?')" href="?idBorrar=<?= $v['id'] ?>">Borrar
                        producto</a>
                </div>

                <?php
            }
            ?>
        </div>

    </div>
</body>

</html>