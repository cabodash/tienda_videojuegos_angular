<?php 
session_start();
if(isset($_POST["pass"]) && $_POST["pass"] == "123"){
    $_SESSION["admin"] = "ok";
    header("Location: gestionar_videojuegos.php");
}

?>


<div>
    <h2>Introduce la contraseña de administracion</h2>
    <form method="post">
        <input type="password" name="pass">
        <input type="submit" value="Aceptar">
    </form>
</div>