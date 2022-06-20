<?php
//Para poder trabajar con archivos y con el input:file se debe de agregar una propiedad al formulario llamada  enctype="multipart/form-data"
//Para recepcionar el archivo tiene que ser con $_FILES
//En el caso contrario solo nos mandara el nombre

//enctype activa la compatibilidad de adjuntar una imagen quie necesitamos obtener.
//El enctypeatributo especifica cómo se deben codificar los datos del formulario al enviarlos al servidor.
//Nota: el enctypeatributo solo se puede usar si method="post".
/*
Tiene tres valores 
    -application/x-www-form-urlencoded - por defecto -  All characters are encoded before sent
    -multipart/form-data	- This value is necessary if the user will upload a file through the form
    -text/plain - Sends data without any encoding at all. Not recommended
*/

///PARA GUARDAR ARCHIVOS LA CARPETA DEBE DE TENER LOS PERMISOS

if ($_POST) {

    // print_r($_POST);

    print_r($_FILES['archivo']);
    //Funcion para guardar imagenes - move_uploaded_file pide dos argumento
    //1-Nombre temporal 2-Nombre con el que se va a guardar
    move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);
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
    <br>
    <br>
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post">
        <!-- Enviar lo que es un archivo con cualquier extension - adapatar y validar
        input:file
            No se puede poner un valor por defecto
            Se tiene que recibir de otra forma
    -->
        Archivo: <br>
        <input type="file" name="archivo" id="">

        <input type="submit" name="enviar" value="Enviar">

    </form>
</body>

</html>