<?php
//Warning: Undefined array key "txtname"  No existe ese envio -- si envia esa informacion que aparesca
//recibir informacion del formualario HTML metodo post
    

    //Si en hubo envio pues 
    //Preguinta ?hay un envio atraves de un formualrio com metodo post?
    //Entonces recepciona ese valor almacenalo en una variable e imprimelo

    //El metodo post los oculta y los recepcion
    if ($_POST) {
        $name = $_POST['txtname'];
        echo "Hola " . $name;
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio2.php" method="post">
        <!--Se va enviar la info a si mismo-->
        Nombre:
        <input type="text" name="txtname">
        <br>
        <input type="submit" value="Enviar">

    </form>
</body>

</html>