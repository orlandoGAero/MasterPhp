<?php

/** Ejercicio 2. Escribir programa que añada valores a un array mientras 
 * que su longitud sea menor a 120 y luego mostrarlo en pantalla */

$numeros = array();

function agregarElementos($array) {

    for($i = 0; $i < 120; $i++) {
        $array[] = "elemento-$i";
    }
    
    return mostrarElementos($array);
}

function mostrarElementos($array) {
    $res = "<h4>Elementos</h4>";
    $res .= "<ul>";
    foreach($array as $e) {
        $res .= "<li>$e</li>";
    }
    $res .= "</ul>";

    return $res;
}

echo agregarElementos($numeros);
