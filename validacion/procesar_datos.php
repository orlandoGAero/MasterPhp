<?php

    $errores = array();
    $values = array();  
    $nombre = (!empty(trim($_POST['nombre']))) ? $_POST['nombre'] : null;
    $apellidos = (!empty(trim($_POST['apellidos']))) ? $_POST['apellidos'] : null;
    $edad = (!empty(trim($_POST['edad']))) ? $_POST['edad'] : null;
    $tel = (!empty(trim($_POST['tel']))) ? $_POST['tel'] : null;
    $email = (!empty(trim($_POST['email']))) ? $_POST['email'] : null;
    $password = (!empty($_POST['password'])) ? $_POST['password'] : null;

    if($nombre && $apellidos && $edad && $tel && $email && $password) {
        
        if(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/",$nombre) ) {
            $errores['nombre'] = 'Ingresa un nombre válido';
        }

        if(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/",$apellidos)) {
            $errores['apellidos'] = 'Ingresa apellidos válidos';
        }

        if(!is_numeric($edad)) {
            $errores['edad'] = 'Ingresa una edad valida';
        } else if( !($edad >= 1 && $edad <= 120) ) {
            $errores['edad'] = 'Ingresa una edad entre un rango de 1-120 años';
        }
        
        if(!preg_match("/^[0-9]{10}$/",$tel)) {
            $errores['telefono'] = 'Ingresa un telefono valido';
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = 'Ingresa un correo valido';
        }

        if(strlen($password) < 8) {
            $errores['password'] = 'Tu contraseña debe tener al menos 8 caracteres';
        }

    } else {
       $errores['faltan'] = 'Ingresa todos los valores';
    }
    
    if(count($errores) > 0):
        $values['nombre'] = $nombre;
        $values['apellidos'] = $apellidos;
        $values['edad'] = $edad;
        $values['telefono'] = $tel;
        $values['email'] = $email;
        header("Location: index.php?e=".base64_encode(serialize($errores))."&v=".base64_encode(serialize($values)));
?>
<?php else: ?>
        <div>
            <h2>Verifica que los datos sean correctos:</h2>
            <p><?="$nombre $apellidos";?></p>
            <p><?="$edad años";?></p>
            <p><?=$tel;?></p>
            <p><?=$email;?></p>
            <a href="index.php">Atrás</a>
        </div>
<?php endif; ?>

