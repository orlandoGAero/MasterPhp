<?php
    if(isset($_GET['num1'])) {
        $num1 = (int)$_GET['num1'];
    } else {
        $num1 = 1;
    }

    if(isset($_GET['num2'])) {
        $num2 = $_GET['num2'];
    } else {
        $num2 = 1;
    }

    echo 'Suma: '.($num1+$num2)."<br/>";
    echo 'Resta: '.($num1-$num2)."<br/>";
    echo 'Multiplicacion: '.($num1*$num2)."<br/>";
    echo 'División: '.($num1/$num2)."<br/>";
    echo 'Residuo: '.($num1%$num2)."<br/>";




?>