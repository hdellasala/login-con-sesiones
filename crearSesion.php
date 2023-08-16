<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["nombre"]) && !empty($_POST["usuario"]) && !empty($_POST["password"] )){
        {
        session_start();
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["usuario"] = $_POST["usuario"];
        $_SESSION["password"] = $_POST["password"];
        echo
        'Bienvenido ' . $_SESSION["nombre"] .'<br>
        tu usuario es: '. $_SESSION["usuario"] .'<br>
        y tu contraseña es: '. $_SESSION["password"] . '<br>';
        echo "<h1>La Sesión ha sido creada.<p>
        <a href='index.html'><button type='button'>VOLVER</button></a></h1>";
        
    }
}

}
?>