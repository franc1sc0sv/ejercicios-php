<?php
 //crear la lctura hacia otro archivo

 //Abriendo  un archivo para leeer el contenido
 //Direccion de archivo
 $archivo = "contenido.txt";

 //Funcion fopen(file open)
 //Abrimos el archivo en modo lectura
 $archivoAbuerto =fopen($archivo,"r"); //r = formato de lectura


 //fread(variavle + filezise)
 //Leemos todo el contenido del archivo y lo voy almacenar en un=a variable
 $contenido = fread($archivoAbuerto, filesize($archivo));

 echo $contenido;

?>