<?php
/*
    Crear un array con el siguiente contenido videojuegos
    ACCION      AVENTURA        DEPORTES

    Cada columna debe ir en un fichero separado
*/

$videojuegos = array(
    'Accion' => array('GTA San Andreas', 'Fornite', 'PUGB'),
    'Aventura' => array('Crash', 'Last of Us', 'Assasing'),
    'Deporte' => array('FIFA', 'Formula 1 2020', 'Madden 2020')
);

$indices = array_keys($videojuegos);
?>

<table border='2'>
    <caption>Videojuegos</caption>
    <thead>
        <tr>
            <?php foreach($indices as $indice): ?>
                <th><?=$indice?></th>
            <?php endforeach;?>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($indices as $indice) {
                require_once 'categorias/'.strtolower($indice).'.php';
            }
        ?>
    </tbody>
</table>