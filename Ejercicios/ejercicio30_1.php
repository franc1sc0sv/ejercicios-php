<?php
//Los datos se mantienen aunque cambiemos de pagina
//Sirven para almacenar informacion y mostrarlas entre paginas
session_start();

//isset - saber si tiene algo xD
if ( isset($_SESSION["user"]) ) {
    echo "usuario: ".$_SESSION["user"]."<br/>"."estatus: ".$_SESSION["estatus"];
} else {
    echo "No hay datos";
}



?>