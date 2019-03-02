<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ejemplo2 - formulario GET / POST </title>
</head>

<body>
    <form method="get" action="ejemplo2.php" enctype="application/x-www-form-urlencoded">
        <label>Correo Electronico<input type="email" name="correo" id="correo" /></label>
        <input type="submit" value="Enviar" name="enviar" />    
    </form>
    <?php
        if($_GET){
            print_r($_GET);
        }
    ?>
    <form method="post" action="ejemplo2.php" enctype="application/x-www-form-urlencoded">
        <label>Correo Electronico<input type="email" name="correo" id="correo" /></label>
        <input type="hidden" name="section" value="45" />
        <input type="submit" value="Enviar" name="enviar" />    
    </form>
        if($_POST){
            print_r($_POST);
        }
    ?>
</body>

</html>
