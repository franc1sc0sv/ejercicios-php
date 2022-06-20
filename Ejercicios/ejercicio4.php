<?php
//Envio de variables - conacatenacion - string

if ($_POST) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    
    //Concatenacion union entre elementos "."

    //string - Comillas dobles - texto simple
    //Grupo de caracteres - comillas simples

    echo "Hola ".$name. " " .$lastname;
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
    <form action="ejercicio4.php" method="post">
        Nombre:
        <input type="text" name="name"><br>
        Apellido:
        <input type="text" name="lastname"><br>
        <input type="submit" value="Enviar">

    </form>
</body>

</html>