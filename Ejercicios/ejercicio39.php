<?php
//Crear un archivo con un contenido especifico en php

//Para ponerle nombre al archiivo
$nombreArchivo = "archivo.txt";
$contenido="Hola, saludos";

$archivoCrear=fopen($nombreArchivo,"w");//W - Modo de escrtura

fwrite($archivoCrear,$contenido);//Escribiendo el archivo
fclose($archivoCrear);
?>