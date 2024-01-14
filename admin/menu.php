<?php
if (!isset($_SESSION["admin"])) {
    include "login_admin.php";
    die(); //esto corta la ejecucion
}
?>


<body>
    <div class="navbar">
        <a class="btn-primary" href="nuevo_videojuego.php">Nuevo Videojuego</a>
        <a class="btn-primary" href="gestionar_videojuegos.php">Gestionar Videojuegos</a>
        <a class="btn-primary" href="gestionar_pedidos.php">Gestionar Pedidos</a>
        <div class="last">
            <a class="btn-primary" href="http://localhost:4200/">Volver a la Tienda</a>
        </div>
    </div>

</body>