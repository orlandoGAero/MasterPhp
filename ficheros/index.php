<?php
goto a;
//Abri fichero
$archivo = fopen("fichero.txt","a+");


// Leer contenido
while(!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido.'<br>';
}

//Escribir en fichero
fwrite($archivo,"<br>soy una linea agregada desde php");

// Cerrar fichero
fclose($archivo);

a:
// Comprobar si existe archivo
if (file_exists("fichero.txt"))
    echo "Existe el archivo!";
else
    echo "No existe!!";
// Manipular archivos

// Copiar
// copy("fichero.txt","archivo.txt") or die("Error al copiar");

// Renombrar
// rename("archivo.txt","archivito.txt");

// Borrar
// unlink("archivito.txt") or die("Error al borrar");
