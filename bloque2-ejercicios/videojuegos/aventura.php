<?php

    $res .= "<table>";
    foreach($juegos['aventura'] as $videojuego) {
        $res .= "<tr>
                    <td>$videojuego<td>
                </tr>";
    }
    $res .= "</table>";