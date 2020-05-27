<?php

print_r($_COOKIE);

if(isset($_COOKIE['micookie'])) {
    echo "{$_COOKIE['micookie']}<br>";
} else {
    echo "No existe la cookie<br>";
}

if(isset($_COOKIE['unyear'])) {
    echo "{$_COOKIE['unyear']}<br>";
} else {
    echo "No existe la cookie de un año<br>";
}

if(isset($_COOKIE['unsegundo'])) {
    echo "{$_COOKIE['unsegundo']}<br>";
} else {
    echo "No existe la cookie de un segundo<br>";
}
?>

<a href="borrar_cookie.php">Borrar Cookies</a>