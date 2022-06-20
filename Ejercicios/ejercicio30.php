<?php

//Esta instruccion nos va servir apra mantener informacion en cualquier pagina mientras el navegador este abierto
//start crea datos que se van a mantenerse en todas las paginas
session_start();

$_SESSION["user"]="FJ";
$_SESSION["estatus"]="logueado";



echo "sesion iniciada".":<br/>";
echo "usuario: ".$_SESSION["user"]."<br/>"."estatus: ".$_SESSION["estatus"];
?>