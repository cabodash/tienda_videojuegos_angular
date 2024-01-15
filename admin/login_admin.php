<?php
session_start();
if (isset($_POST["pass"]) && $_POST["pass"] == "123") {
    $_SESSION["admin"] = "ok";
    header("Location: gestionar_videojuegos.php");
}

?>


<div style="
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    padding: 40px;
    gap: 2rem;
    ">
    <h2>Introduce la contraseña de administracion</h2>
    <form method="post" style="
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 1rem;
    ">
        <input class="input" type="password" name="pass">

        <button>
            <span class="circle1"></span>
            <span class="circle2"></span>
            <span class="circle3"></span>
            <span class="circle4"></span>
            <span class="circle5"></span>
            <span class="text">Submit</span>
        </button>
    </form>
</div>