<?php
// Tarea Clase 6 - PD - Programación Back End

echo $_GET["nombre"];
echo "<br>";
echo $_GET["nota"];
echo "<hr>";

# 2)

switch ($_GET["nota"]) {
    case 0:
    case 1:
    case 2:
        echo " Muy deficiente <br>";
        break;
    case 3:
    case 4:
    case 5:
        echo " Insuficiente <br>";
        break;
    case 6:
    case 7:
        echo " Bien <br>";
        break;
    case 8:
    case 9:
        echo " Notable <br>";
        break;
    case 10:
        echo " Sobresaliente <br>";
        break;
    default:
    echo " No cumple los parametros <br>";
        break;
}
echo "<hr>";

# 3)

if ($_GET["nombre"] =="") {
    echo "<br> El alumno no fue ingresado.";
} else {
    echo "El nombre del alumno es: " . $_GET["nombre"];
}
echo "<hr>";

/* Profe, esta opcion no me arroja el resultado deseado ...

if (isset($_GET["nombre"])) {
    echo "El nombre del alumno es: " . $_GET["nombre"];
} else {
    echo "<br> El alumno no fue ingresado.";
}

*/
if ($_GET["nota"] == "") {
    echo "<br> La nota no fue ingresada.";
} elseif (!is_numeric($_GET["nota"])) {
    echo "<br> la nota no es un numero.";
} elseif (($_GET["nota"] < 0) || ($_GET["nota"] > 10)) {
    echo "<br> La nota no es un número entre el 0 y el 10.";
}