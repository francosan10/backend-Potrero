<?php

echo $_GET["mailUsuario"];
echo "<br>";

echo $_GET["passwordUsuario"];
echo "<br>";

if($_GET["mailUsuario"] == "juuan@pepe.com" && $_GET["passwordUsuario"] == "345374895974") {
    echo "<br>Se logueo correctamnete!";
}
else {
    echo "<br>los datos ingresados son incorrectos!";
}

?>