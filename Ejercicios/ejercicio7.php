<?php
//Operaciones arimeticas
    if ($_POST) {

        //Recepcionar valores
        $A=$_POST['valorA'];
        $B=$_POST['valorB'];

        //Aplicar una operacion
        $suma=$A + $B;
        $resta=$A - $B;
        $multiplicacion=$A * $B;
        $division=$A / $B;

        echo  "<br/>".$suma;
        echo  "<br/>".$resta;
        echo  "<br/>".$multiplicacion;
        echo  "<br/>".$division;

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
    <form action="ejercicio7.php" method="post">
        Valor A:
    <input type="text" name="valorA"><br>
        Valor B:
    <input type="text" name="valorB"><br>

    <input type="submit" value="CALCULAR">

    </form>    

</body>
</html>