<?php
    $res .= "<table>";
    foreach($juegos['deportes'] as $videojuego) {
        $res .= "<tr>
                    <td>$videojuego<td>
                </tr>";
    }
    $res .= "</table>";