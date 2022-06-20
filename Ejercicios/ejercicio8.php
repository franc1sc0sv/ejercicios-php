<?php
//Operaciones relacionales
if ($_POST) {
    // "=" asignacion
    $A = $_POST['valorA'];
    $B = $_POST['valorB'];
    //El operador relacionarl va a ser comparacion preguntado si un valo es mayor, igual, menor, mayor o igual, etc.
    //Esta validando si realmenta si hay una relacion que se considera
    /* 
    tipos de operadores:
        Operador de igualdad  
        ==  igual
        !== no es igual

        Operadores de comparación
        >
        <
        >=
        <=


    */
    echo "A = " . $A. "<br/>";
    echo "B = " . $B. "<br/>";
    if ($A > $B) {
        echo "El numero " . $A . " es mayor que" . $B . "<br/>";
        echo "El valor de A es mayor que B";
    } else {
        echo "El numero " . $B . " es mayor que " . $A . "<br/>";
        echo "El valor de B es mayor que A";
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
    <form action="ejercicio8.php" method="post">
        Valor A:
        <input type="text" name="valorA"><br>
        Valor B:
        <input type="text" name="valorB"><br>

        <input type="submit" value="CALCULAR">

    </form>

</body>

</html>