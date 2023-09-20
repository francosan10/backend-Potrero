<?php
//Tarea Clase 3 - PD - Programación Back End

# 1)
echo "hola mundo";
echo "<br>";
print "Hola mundo";
echo "<br>";
# 2)
$asignar = "Hola Mundo";
print "$asignar";
echo "<br>";
# 3)
$variabla1 = 3;
$variable2 = 5;
echo $variabla1 + $variable2;
echo "<br>";
echo $variabla1 - $variable2;
echo "<br>";
echo $variabla1 * $variable2;
echo "<br>";
echo intval($variabla1 / $variable2);
echo "<br>";
echo $variabla1 % $variable2;
echo "<br>";
# 4)
$gradosC = 20;
$gradosF = ($gradosC * 9/5) + 32;
echo "$gradosF grados fahrenheit";
echo "<br>";
# 5-a)
$rectanguloBase = 18;
$rectanguloAltura =12;
$perimetroR = ($rectanguloBase * 2) + ($rectanguloAltura * 2);
$areaR = $rectanguloBase * $rectanguloAltura;
echo "$perimetroR cm de perimetro";
echo "<br>";
echo "$areaR cm de area";
echo "<br>";
# 5-b)
pi();
# $pi = 3.14;
$circuloRadio = 30;
$perimetroC = (2 * pi()) * $circuloRadio;
$areaC = pi() * pow($circuloRadio, 2);
echo "$perimetroC cm de perimetro circulo";
echo "<br>";
echo "$areaC cm de area circulo";
echo "<br>";
?>