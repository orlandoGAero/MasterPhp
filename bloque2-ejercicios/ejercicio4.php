<?php

/**
 * Ejercicio 4. Crear un script en php que tenga cuatro variables, una de tipo array,
 * otra de tipo string, otra int y otra booleana y que imprima un mensaje
 * segun el tipo de variable que sea.
 */

 $ciudades = array('Roma','Paris','México');
 $ciudades = 'Miami';

 if(is_array($ciudades)) {
     echo 'La variable $ciudades es de tipo '.gettype($ciudades)."<br>";
 } else {
    echo "No es un array";
 }

 $frase = "EL portal esta en Hawings";

 if(is_string($frase)) {
    echo 'La variable $frase es de tipo '.gettype($frase)."<br>";
 } else {
     echo "No es un string";
 }

 $numero = 12;

 if(is_integer($numero)) {
    echo 'La variable $numero es de tipo '.gettype($numero)."<br>";
 } else {
     echo "No es un numero";
 }

 $bool = false;


 if(is_bool($bool)) {
    echo 'La variable $bool es de tipo '.gettype($bool)."<br>";
 } else {
     echo "No es un booleano";
 }