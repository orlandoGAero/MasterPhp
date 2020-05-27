<?php

    // Crear carpeta
    
    if(!is_dir('nueva')) {
        if (mkdir("nueva", 0777)) {
            echo "Carpeta creada exitosamente";
        } else {
            die("Error al crear carpeta");
        }
    } else {
        echo "Ya existe";
    }

    echo "<hr>";

    // Borrar carpeta
    // if(rmdir("nueva")) {
    //     echo "Carpeta eliminada";
    // } else {
    //     die ("Error al eliminar carpeta");
    // }

    // ver archivos

    if($gestor = opendir("./nueva")) {
        while (false !== ($archivo = readdir($gestor))) {
            if($archivo != '.' && $archivo != '..')
                echo $archivo."<br>";
        }
    }