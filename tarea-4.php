<?php
//Tarea Clase 4 - PD - Programación Back End
# 1)
$varPositivo = 5;
if($varPositivo >= 0) {
    echo "El número ingresado es un
    número positivo <br>";
}
# 2)
$varMayor = 8;
if($varMayor > 1 && $varMayor < 10) {
    echo "El número ingresado es mayor a 1 y menor a 10 <br>";
}
# 3)
$mayorIgual = 6;
if ($mayorIgual >= 10 || $mayorIgual < 2) {
    echo "El número ingresado es mayor o igual a 10 o menor a 2 <br>";
} else {
    echo "El número ingresado no pudo ser validado <br>";
}
# 4)
$numero1 = 3;
$numero2 = 34;
if ($numero1 > $numero2) {
    echo "el resultado de la suma es " .($numero1 + $numero2) ."<br>";
    echo "el resultado de la resta es " .($numero1 - $numero2) ."<br>";
} else if($numero2 > $numero1){
    echo "el resultado de la multiplicación es " .($numero1 * $numero2) ."<br>";
    echo "el resultado del resto es " .($numero1 % $numero2) ."<br>";
} else {
    echo "Los números ingresados son iguales";
}
?>