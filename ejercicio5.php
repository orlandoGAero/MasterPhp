<?php

/*
    Hacer un programa que muestre todos los numeros entre dos numeros que lleguen por url
*/

if(isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = (int)$_GET['num1'];
    $num2 = (int)$_GET['num2'];

    if($num1 < $num2) {
        for($i = $num1; $i <= $num2; $i++) {
            echo "<b>$i<b>";
            if($i < $num2) {
                echo ', ';
            }
        }
    } else {
        echo '<h2>num1 debe ser menor a num2</h2>';
    }
} else {
    echo '<h2>Ingresa los parametros num1 y num2</h2>';
}