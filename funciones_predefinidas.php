<?php

    // Debuggear
    $nombre = 'Orlando';
    echo "<h4>Debugear</h4>";
    var_dump($nombre);

    echo "<h4>Fecha</h4>";
    echo date('d-M-y');
    echo "<br>";
    echo date('O');
    echo "<h4>Timestamp</h4>";
    echo time();
    echo "<br>".$_SERVER['REQUEST_TIME'];

    // MATEMATICAS
    // Raiz cuadradada
    echo "<h4>Raíz Cuadradada 16: </h4>". sqrt(16);
    echo "<h4>Número aleatorio entre 20 y 100: </h4>". rand(20,100);
    echo "<h4>Pi</h4>" . pi();
    echo M_PI;
    echo "<h4>Redondear: </h4>".round(7.895620,3);
    echo "<h4>Redondear: </h4>".round(-10.9910,3,PHP_ROUND_HALF_DOWN);

    // Mas funciones
    echo "<br>";
    echo gettype($nombre);

    // es string
    if(is_string($nombre)) {
        echo "<br>El nombre ($nombre) es un string";
    } else {
        echo "<br>No es string";
    }

    if(!is_float($nombre))
        echo "<br>Nombre no es un numero con decimal";
    echo "<br>";

     echo  (isset($nombre)) ? 'SI' : 'NO'; echo ' existe la variable<br>';

     $frase = "       Somos Diablos, Somos Rojos      ";
     var_dump($frase);
     echo "<br>Usando trim()<br>"; 
     var_dump(trim($frase));

     $year = 2020;
     unset($year);
    var_dump($year);

    // comprobar variable vacia
    echo "<br>";
    $texto = "      ";

    if(empty(trim($texto)))  echo 'la variable texto esta vacia'; else echo 'la variable texto tiene CONTENIDO';

    // contar caracteres
    $cadena = "12345";
    echo '<br>La variable $cadena tiene '. strlen($cadena) .' caracteres';
    $dc = "Batman el caballero de la noche";
    echo "<br>";
    echo strpos($dc,'caballero');
    echo "<br>";
    $dc = str_replace('la noche','gotham',$dc);
    echo $dc;
    echo "<br>";
    echo strtolower($dc);
    echo "<br>";
    echo strtoupper($dc);
?>