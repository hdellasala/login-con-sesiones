<?php

session_start();
// Set session variables
$_SESSION["nombre"] = "green";
$_SESSION["user"] = "cat";
$_SESSION["pass"] = "cat";
echo "Session variables are set.";


// Set session variables
if ($contador=0)
$_SESSION["veces"] =1;
$_SESSION["veces"] = $_SESSION["veces"]+1;
$contador=$contador+1;
echo "<h1>Se ha establecido la sesión</h1>";
echo "<P>el boton contador ha sido pinchado " .$_SESSION["veces"]. " veces</p>";
echo "<p></p>";
echo '<form action="process.php">';
echo '<input id="contador" type="submit" value="incremente contador">';
echo '</form>';

echo '<form action="destruirSesion.php">';
echo '<input id="destruir" type="submit" value="destruir sesión">';
echo '</form>';

/*header("Location: index.html");*/

?>
