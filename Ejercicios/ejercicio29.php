<?php
$server="localhost";
$user="root";
$password="";


//Leer datos
try {
    $conexion= new PDO("mysql:host=$server;dbname=album",$user,$password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida :)";

    //Selecciona todos los campos de la tabla fotos
    $sql = "SELECT * FROM `fotos`";

    //Tnemos que tener en cuenta caracteristicas 
    //SENTENCIA QUE ME EJECUTE LA INSTRUCCION USANDO PDO
    //Se va almacenar los datos en sentencia
    $sentencia=$conexion->prepare($sql);
    //Metodo de ejecucion
    $sentencia->execute();
    //Obtener la informacion
    $resultado=$sentencia->fetchAll();

    print_r($resultado);

    // foreach ($resultado as $foto) {
    //     echo "<br/>".$foto['nombre'];
    // }

    //Seleccion
    //Preparo la seleccion
    //Obtengo los resultados
    


} catch (PDOException $error) {
    echo "La conexion ha fallado".$error;
}



?>

