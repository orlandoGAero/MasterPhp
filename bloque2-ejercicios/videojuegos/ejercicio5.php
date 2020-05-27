<?php

/*
    Crear un array con el siguiente contenido videojuegos
    ACCION      AVENTURA        DEPORTES

    Cada columna debe ir en un fichero separado
*/

$videojuegos = array(
    'accion' => array('GTA San Andreas', 'Fornite', 'PUGB'),
    'aventura' => array('Crash', 'Last of Us', 'Assasing'),
    'deportes' => array('FIFA 2020', 'Formula 1 2020', 'Madden 2020','PES 2020', 'Moto GP 2020')
);

function mostrarVideojuegos($juegos)
{
    $res = "<h4>Videojuegos</h4>
            <table border='1'>
                <thead>
                    <tr>
                        <th>Acción</th>
                        <th>Aventura</th>
                        <th>Deportes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>";
                            include_once 'accion.php';
    $res .= "           </td>
                        <td>";
                            include_once 'aventura.php';
    $res .= "           </td>
                        <td>";
                            include_once 'deportes.php';
    $res .=            "</td>";
    $res .= "       </tr>";

    $res .= "   </tbody>
            </table>";

    return $res;
}

echo mostrarVideojuegos($videojuegos);
