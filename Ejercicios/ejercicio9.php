<?php
//Operaciones logicos
if ($_POST) {
    $A = $_POST['valorA'];
    $B = $_POST['valorB'];

    /*
    AND - TRUE TRUE - && - El resultado solo va ser true si las dos comparaciones son true true - si hay una false siempre va ser false
    OR - FALSE FALE - || - El resultado va ser false solo si las dos conmpraciones son falso false - si hay una tur siempre va ser tue
    XOR - Si SOLO uno de los 2 operandos es TRUE devuelve TRUE, si los 2 son TRUE devuelve FALSE.
    NOT - Si el operando es FALSE devuelve TRUE, si el operando es TRUE devuelve FALSE.
    */
    if (($A > $B) || ($A != $B)) {
        echo "El valor de A es DIFERENTE que B y tambien es mayor";
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
    <form action="ejercicio9.php" method="post">
        Valor A:
        <input type="text" name="valorA"><br>
        Valor B:
        <input type="text" name="valorB"><br>

        <input type="submit" value="CALCULAR">

    </form>

</body>

</html>