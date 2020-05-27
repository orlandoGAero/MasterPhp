<?php

// Iniciando con sessiones

session_start();

$local = 'Soy una variable local';

$_SESSION['var_session'] = 'Soy una variable de sessión';

echo "$local<br>";

echo "{$_SESSION['var_session']}<br>";