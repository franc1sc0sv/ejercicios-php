<?php
//if anidados
    if ($_POST) {

        //Recepcionar valores
        $a=$_POST['valorA'];
        $b=$_POST['valorB'];

        echo $a."<br/>";
        echo $b."<br/>";

        if ($a==$b) {
            echo "Los valores son iguales"."<br/>";
            if ($a==100) {
                $a = $a - 99;
                echo "1?";
            }
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
    <form action="ejercicio10.php" method="post">
        Valor A:
    <input type="text" name="valorA"><br>
        Valor B:
    <input type="text" name="valorB"><br>

    <input type="submit" value="CALCULAR">

    </form>    

</body>
</html>