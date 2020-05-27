<?php

if(isset($_COOKIE['unyear'])) {
    setcookie('unyear','',time()-3600);
}

header("Location:ver_cookies.php");