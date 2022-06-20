<?php
    if ($_POST) {
            $A=$_POST['texto-random-'];
        
        echo "Texto ramdom convertido en Mayusculas: ".strtoupper($A)."<br/>";
        echo "Texto ramdom convertido en Minusculas: ".strtolower($A)."<br/>";
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
    <form action="ejercicio18.php" method="post">
    Texto ramdom:
    <input type="text" name="texto-random-"><br>
    </form>
</body>
</html>