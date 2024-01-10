<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("menu.php");?>
    <h2>Listado de videojuegos de la tienda</h2>
    <?php 
        foreach($videojuegos as $v){

    ?>

        <div>
            <div class="item">
                <p>Nombre: <?= $v["nombre"]?></p>
                <p>Descripcion:<?= $v["descripcion"]?> </p>
                <p>Precio: <?= $v["precio"]?></p><br>
                Descripcion: <img src="../images/videojuegos/<?= $v["id"]?>.jpg">
                <a onclick="return confirm('estas seguro?')" href="?idBorrar=<?= $v['id']?>">Borrar producto</a>
            </div>
        </div>

    <?php 
        }
    ?>
</body>
</html>