<?php
//if else
if ($_POST) {
    $A = $_POST['valorA'];
    $B = $_POST['valorB'];

    if ($A != $B) {
        
        echo " Los valores no son iguales";

    } else {
        echo " Los valores son iguales";
    }
    
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
    <form action="ejercicio11.php" method="post">
        Valor A:
        <input type="text" name="valorA"><br>
        Valor B:
        <input type="text" name="valorB"><br>

        <input type="submit" value="CALCULAR">

    </form>

</body>

</html>