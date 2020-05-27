<?php
    $res .= "<table>";
    foreach($juegos['accion'] as $videojuego) {
        $res .= "<tr>
                    <td>$videojuego<td>
                </tr>";
    }
    $res .= "</table>";