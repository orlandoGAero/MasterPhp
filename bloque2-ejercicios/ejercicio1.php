<?php

    /* 1. Hacer unprograma en PHP que tenga un array con 8 numeros enteros y que haga
     lo siguiente:
     - Recorrer y mostrar
     - Ordenar y mostrar
     - Mostrar su longitud
     - Buscar un elemento */

    // funciones
    function mostrarNumeros($arrNumeros) {
        $res = '';
        $res .= '<ul>';
        
        foreach($arrNumeros as $numero) {
            $res .= "<li>$numero</li>";
        }
        
        $res .= '</ul>';

        return $res;
    }    

    $numeros = [1,2,4,6,7,9,35,13,56,24,30,12];

    // - Recorrer y mostrar

    echo "<h3>Array de números</h3>";
    echo mostrarNumeros($numeros);
    
    // - Ordenar y mostrar

    echo "<h3>números ordenados</h3>";
    sort($numeros);
    echo mostrarNumeros($numeros);

    //  - Mostrar su longitud
    echo "número de elementos del array números: ".count($numeros);
    
    // - Buscar un elemento
    if(isset($_GET['num'])) {
        $busqueda = $_GET['num'];

        $buscar = array_search($busqueda,$numeros);

        if(!empty($buscar)) {
            echo "<p>Si existe $busqueda en el array números, en el indice: $buscar</p>";
        } else {
            echo "<p>No se encontro el número $busqueda</p>";
        }
    } else {
        echo "<p>NO existe número para buscar</p>";
    }


