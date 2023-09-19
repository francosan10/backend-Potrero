<?php
/*
    echo "hola mundo";
    echo "<b> esta es una segunda linea</b>";

    // comentario de una sola linea

    /*
        esto es un comentario 
        de varias
        lineas
    */
/*    
    echo "<br>";
    //creo mi primer variable
    $variable = 5; //operacion de asignacion

    echo $variable;

    echo "<br>";
    //es sensible a mayusculas
    $Variable = "3";
    echo $Variable;
    //
    echo "<br>";
    var_dump($variable);
    echo "<br>";
    $variable = "4";
    var_dump($variable);
    echo "<br>";

    //operaciones aritmeticas
    $numero1 = 5;
    $numero2 = 10;
    //suma
    echo $numero1 + $numero2;
    echo "<br>";
    //resta
    echo $numero1 - $numero2;
    echo "<br>";
    //multiplicacion
    echo $numero1 * $numero2;
    echo "<br>";
    //division
    echo $numero1 / $numero2;
    echo "<br>";
    //resto (con esta op puedo saber si un numero es par o impar!)
    echo $numero1 % $numero2;
    echo "<br>";
*/    

//Tarea Clase 3 - PD - Programación Back End

//1)
echo "hola mundo";
echo "<br>";
print "Hola mundo";
echo "<br>";
//2)
$asignar = "Hola Mundo";
print "$asignar";
echo "<br>";
//3)
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
//4)
$gradosC = 20;
$gradosF = ($gradosC * 9/5) + 32;
echo "$gradosF grados fahrenheit";
echo "<br>";
//5-a)
$rectanguloBase = 18;
$rectanguloAltura =12;
$perimetroR = ($rectanguloBase * 2) + ($rectanguloAltura * 2);
$areaR = $rectanguloBase * $rectanguloAltura;
echo "$perimetroR cm de perimetro";
echo "<br>";
echo "$areaR cm de area";
echo "<br>";
//5-b)
$pi = 3.14;
$circuloRadio = 30;
$perimetroC = (2 * $pi) * $circuloRadio;
$areaC = $pi * ($circuloRadio * $circuloRadio);
echo "$perimetroC cm de perimetro";
echo "<br>";
echo "$areaC cm de area";
echo "<br>";
?>