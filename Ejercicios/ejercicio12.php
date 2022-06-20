<?php

if ($_POST) {
    $buton = $_POST['btnValor'];

    switch ($buton) {
        case '1':
            echo "Boton 1 presionado";
            break;
        case "2":
            echo "Boton 2 presionado";
            break;

        case "3":
            echo "Boton 3 presionado";
            break;
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
    <form action="ejercicio12.php" method="post">

        <input type="submit" value="1" name="btnValor"><br>
        <input type="submit" value="2" name="btnValor"><br>
        <input type="submit" value="3" name="btnValor"><br>
    </form>
</body>

</html>