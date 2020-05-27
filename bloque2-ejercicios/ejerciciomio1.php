<?php

 $peliculas = array();

 function agregarPelicula($listaPeliculas) {
    
    global $peliculas; 

    foreach ($listaPeliculas as $pelicula) {
        # code...
        if(strlen($pelicula) <= '12')
            $peliculas[] = $pelicula;
        else
            echo "$pelicula no se puedo agregar<br>";
    }
    
 }

 function mostrarPeliculas($peliculas) {


    $res = "<h4>Películas</h4>";

    if(sizeof($peliculas) > 0) {

        $res .= "<ul>";
        foreach ($peliculas as $pelicula) {
            $res .= "<li>$pelicula</li>";
        }
        $res .= "</ul>";
    } else {
        $res .= "No existen peliculas";
    }


    return $res;

 }

 $listaPeliculas = ['Jonh Wick','Cars','La leyenda de la llorona','Avengers','Piratas del Caribe'];

 agregarPelicula($listaPeliculas);

 echo mostrarPeliculas($peliculas);