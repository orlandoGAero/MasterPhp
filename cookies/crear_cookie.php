<?php

// crear cookie
setcookie('micookie','soy una nueva cookie');
setcookie('unsegundo','caducare en un segundo',strtotime('+2 seconds'));
setcookie('unyear','caducare en un año',time()+60*60*24*365);

header("Location:ver_cookies.php");