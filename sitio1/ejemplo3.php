<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ejemplo3 - Calculadora </title>
</head>

<body>
    <form method="get" action="ejemplo3.php" enctype="application/x-www-form-urlencoded">
        <label for="num1">No. 1: </label>
        <input type="number" name="num1" placeholder="Proporcione el primer valor" />
        <label for="num2">No. 2: </label>
        <input type="number" name="num2" placeholder="Proporcione el segundo valor" />
        <input type="submit" name="op" value="suma" />
        <input type="submit" name="op" value="resta" />
        <input type="submit" name="op" value="multi" />
        <input type="submit" name="op" value="div" />
    </form>
    <?php 
        if($_GET){
            $var1=$_GET['num1'];
            $var2=$_GET['num2'];
            $var3=$_GET['op'];
            if($var3=='suma'){
                echo $var1."+".$var2.'='.($var1+$var2);
            }
            if($var3=='resta'){
                echo $var1."-".$var2."=".($var1-$var2);
            }
            
        }
    ?>
</body>

</html>
