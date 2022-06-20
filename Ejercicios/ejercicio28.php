<?php
//Datos de conexcion al server
$server="localhost";
$user="root";
$password="";




//Es como una condicional de errores
//Los errores pueden ser controlados por el try cath
//Si no hay errores to bien pero si hay uno dime cual error es pero a nivel de maquina - esto errores no se pueden controlar con un if que es otra forma de hacer la conexion con la base de datos
//try - si no sucede nada yo voy a generar un conexion 
///cath - y sucede algo voy a  absorber ese error con el catch
try {
    //PDO clase que me permite conectarme a la base de datos
    //mysql:host + hosting + dbname + user + password

    //En esta instancia estamos pasandole a la clase PDO los argumentos necesarios para la conexion de la bd
//Clase que nos permite conectarnos al servidor
    $conexion= new PDO("mysql:host=$server;dbname=album",$user,$password);
    //Propiedades de que nos de acceso a los errores - ESTAS se llaman por metodos estaticos
    //Como ven es una funcion a la que se esta llamando

    //ATTR_ERRMODE - es un metodo estatico que los datos que necesita setAttribute para mostrar los errores
    //activiamos caracteristicas propias de setAttribute
    //Argumentos de errores para que se activen los errores y nos diga el errror generado
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida :)";

    //insertar datos en la bd
    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la progmacion', 'foto.jpg')";
    $conexion->exec($sql);//exec metodo de PDO que me ejecuta la instruccion sql


} catch (PDOException $error) {
    //Nos va a motrar que tipo de error es
    echo "La conexion ha fallado".$error;
}



?>

