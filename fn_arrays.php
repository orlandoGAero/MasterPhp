
<?php

$lenguages = array(
    'a' => 'Javascript',
    'b' => 'Php',
    'c' => 'Java',
    'd' => 'Phyton',
    'e' => 'C++'
);

$marcas = ['toshiba','dell','hp','lenovo','acer','assus'];
// Ordenar arrays
// 1. orden ascendiente manteniendo la asociación de indices 
asort($lenguages);
echo "<pre>";
var_dump($lenguages);
echo "</pre>";

asort($marcas);
foreach($marcas as $key => $marca) {
    echo "$key -> $marca<br>";
}

echo "<hr>";
// 2. ordenar array de forma inversa y manteniendo indices
arsort($marcas);
foreach($marcas as $key => $marca) {
    echo "$key = $marca<br>";
}

echo "<hr>";
// 2. ordenar array, asignando nuevas claves de indices
sort($marcas);
foreach($marcas as $key => $marca) {
    echo "$key - $marca<br>";
}

echo "<hr>";
// Agregar elementos a un array, al final del array formas:
// 1. $nom_array[] = 'nuevo elemento'
$marcas[] = 'Compaq';
// 2. array_push()
array_push($marcas,'Samsung','Gateway','Sony','Apple');
print_r($marcas);

echo "<hr>";
// aleatorio array
$indice = array_rand($marcas);
var_dump($indice);
echo $marcas[$indice];

echo "<hr>";
// delvuelve array en orden inverso
$marcasInv = array_reverse($marcas);
print_r($marcasInv);

echo "<hr>";
// buscar dentro de un array
var_dump ( array_search('hp',$marcas) );

echo "<hr>";
// eliminar elemento del ultimo
array_pop($marcas);
unset($marcas[3]);
print_r($marcas);