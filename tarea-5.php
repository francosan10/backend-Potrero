<?php
// Tarea Clase 5 - PD - Programación Back End

# 1)
$numero1 = 1;
while ($numero1 < 10) {
    echo "el número es " .$numero1 ."<br>";
    $numero1 ++;
}
echo "<br>";
# 2)
$numero2 = 9;
while ($numero2 >= 1) {
    echo "el número es " .$numero2 ."<br>";
    $numero2 --;
}
echo "<br>";
# 3)
for ($numero3=0; $numero3 <= 20 ; $numero3 = $numero3 + 2) { 
    echo "el número par es: " .$numero3 ."<br>";
}
echo "<br>";
# 4)
for ($numero3=0; $numero3 <= 20 ; $numero3++) { 
    if ($numero3 % 2 != 0) {
        echo "el número impar es: " .$numero3 ."<br>";
    }
}
echo "<br>";
# 5) (me tuve que ayudar con chatgpt porque no entendia como hacerlo)
$suma = 0;
for ($numero3=1; $numero3 <= 20; $numero3++) {
    $suma += $numero3;
}
echo "la suma de los numeros del 1 al 20 es: " .$suma ."<br>";
echo "<br>";
# 6)
$suma2 = 0;
for ($numero4=1; $numero4 <= 20 ; $numero4++) {
    if ($numero4 % 2 != 1) {
        $suma2 += $numero4;
    }
}
echo "la suma de los numeros pares del 1 al 20 es: " .$suma2 ."<br>";
echo "<br>";
?>