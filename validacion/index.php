<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formulario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php 
        $faltan = '';
        $enombre = '';
        $eapellidos = '';
        $eedad = '';
        $etelefono = '';
        $eemail = '';
        $epassword = '';

        if(isset($_GET['e'])) {
            
            $errores = unserialize(base64_decode($_GET['e']));

            if(array_key_exists('faltan',$errores))
                $faltan = "<p style='color:red; border: 1px red solid;display:inline-block;padding:6px;'>{$errores['faltan']}</p>";
                
            if(array_key_exists('nombre',$errores)) {
                $clase_error_n = "class='error'";
                $enombre = "<span style='color:red;display:inline-block;margin-left:5px;'>{$errores['nombre']}</span>";
            }

            if(array_key_exists('apellidos',$errores)) {
                $clase_error_a = "class='error'";
                $eapellidos = "<span style='color:red;display:inline-block;margin-left:5px;'>{$errores['apellidos']}</span>";
            }

            if(array_key_exists('edad',$errores)) {
                $clase_error_e = "class='error'";
                $eedad = "<span style='color:red;display:inline-block;margin-left:5px;'>{$errores['edad']}</span>";
            }

            if(array_key_exists('telefono',$errores)) {
                $clase_error_t = "class='error'";
                $etelefono = "<span style='color:red;display:inline-block;margin-left:5px;'>{$errores['telefono']}</span>";
            }
            
            if(array_key_exists('email',$errores)) {
                $clase_error_em = "class='error'";
                $eemail = "<span style='color:red;display:inline-block;margin-left:5px;'>{$errores['email']}</span>";
            }

            if(array_key_exists('password',$errores)) {
                $clase_error_p = "class='error'";
                $epassword = "<span style='color:red;display:inline-block;margin-left:5px;'>{$errores['password']}</span>";
            }
                
        }

        if (isset($_GET['v'])) {
            $valores = unserialize(base64_decode($_GET['v']));
        }
    ?>
    <div>
        <h2>Ingresa los siguientes datos</h2>
        <?=$faltan;?>
        <form action="procesar_datos.php" method="post">
            <label for="nombre">Nombre</label>
            <p><input type="text" name="nombre" <?=(isset($clase_error_n)) ? $clase_error_n : '';?> value="<?=(isset($valores['nombre'])) ? $valores['nombre'] : '';?>"><?=$enombre;?></p>
            
            <label for="apellidos">Apellidos</label>
            <p><input type="text" name="apellidos" <?=(isset($clase_error_a)) ? $clase_error_a : '';?> value="<?=(isset($valores['apellidos'])) ? $valores['apellidos'] : '';?>"><?=$eapellidos;?></p>
            
            <label for="edad">Edad</label>
            <p><input type="number" name="edad" <?=(isset($clase_error_e)) ? $clase_error_e : '';?> value="<?=(isset($valores['edad'])) ? $valores['edad'] : '';?>"><?=$eedad;?></p>

            <label for="tel">Teléfono</label>
            <p><input type="tel" name="tel" <?=(isset($clase_error_t)) ? $clase_error_t : '';?> value="<?=(isset($valores['telefono'])) ? $valores['telefono'] : '';?>"><?=$etelefono;?></p>

            <label for="email">Email</label>
            <p><input type="email" name="email" <?=(isset($clase_error_em)) ? $clase_error_em : '';?> value="<?=(isset($valores['email'])) ? $valores['email'] : '';?>"><?=$eemail;?></p>

            <label for="password">Contraseña</label>
            <p><input type="password" name="password" <?=(isset($clase_error_p)) ? $clase_error_p : '';?>><?=$epassword;?></p>

            <p><input type="submit" value="Enviar"></p>
        </form>
    </div>
</body>
</html>