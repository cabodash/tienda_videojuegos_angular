
<?php 
if (!isset($_SESSION["admin"])) {
    include "login_admin.php";
    die();//esto corta la ejecucion
}
?>


<body>
    <a href="http://localhost:4200/">Volver a la Tienda</a>
    <div>
        <h1>bienvenido a la administracion de la tienda de videojuegos</h1>
        <a href="nuevo_videojuego.php">Nuevo Videojuego</a>
        <a href="gestionar_videojuegos.php">Gestionar Videojuegos</a>
        <a href="gestionar_pedidos.php">Gestionar Pedidos</a>
    </div>

</body>
