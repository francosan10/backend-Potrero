<?php 
// Tarea Clase 7 - PD - Programación Back End

# 1 - a) 
$Arraypares = array();
for ($pares=0; $pares <=10 ; $pares++) { 
    if ($pares %2 == 0) {
        $Arraypares[] = $pares;
    }
}

foreach ($Arraypares as $numero) {
    echo $numero ."<br>";
}
echo "<hr>";
# b)
$array1 = [
    "Pedro",
    "Ana",
    34,
    1,
];
print_r($array1);
echo "<hr>";
# c)
$arrayAsoc = [
    'Nombre' => "Pedro",
    'Apellido' => "Torres",
    'Dirección' => "Av. Mayo 3703",
    'Teléfono' => 1122334455,
];
print_r($arrayAsoc);
echo "<hr>";
# d)
$ciudades = [
    "Madrid", 
    "Barcelona", 
    "Londres", 
    "New York", 
    "Los Ángeles", 
    "Chicago"
];

foreach($ciudades as $i => $ciudad) {
    echo  "La ciudad con el índice " .$i ." tiene el nombre " .$ciudad .".<br>";
}
echo "<hr>";
# e)
$ciudadesAsoc = [
    'MD' => "Madrid",
    'BCL' => "Barcelona",
    'LD' => "Londres",
    'NY' => "New York",
    'LA' => "Los Ángeles",
    'CCG' => "Chicago"
];

foreach ($ciudadesAsoc as $key => $value) {
    echo "El índice de " .$value ." es " .$key .".<br>";
}
echo "<hr>";