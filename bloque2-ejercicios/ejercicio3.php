<?php

/**
 * 
 * Ejercicio 3. Programa que comprueba si una variable esta vacia y si esta vacia
 * rellenarla con texto en minisculas y mostrarlo en mayusculas y negritas
 */

 $variable = "    ";

 if(empty(trim($variable))) {
     $texto = "batman dark night";
     $textoMay = strtoupper($texto);
     echo "<b>$textoMay</b>";
 } else {
    $textoMay = strtoupper($variable);
    echo $textoMay;
 }