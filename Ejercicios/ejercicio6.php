<?php
//Constantes


//declaramos una variable

$age=15;

//Imprimiendo el cambio
//Se pueden concatenar etiquetas HTML como string
echo $age."<br/>";

$age = 16;//Cambiar el valor de la variable
echo $age."<br/>";

//Uso de constante el valor no tiene que cambiar
define("NOMBRE","FJ");
//Nombre de la variable  + valor
//Imprimir constante - Tiene que ser sin signo de "$"
echo NOMBRE;






?>