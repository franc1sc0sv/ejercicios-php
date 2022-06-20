<?php
    //Leer formatos JSON
    $jsonContenido=' [
        {"nombre":"Francisco", "Apellido":"Hernandez"},
        {"nombre":"Levi", "Apellido":"Jimenez"}
    ] ';

        //Convierto el string a un resultado
        //Agarrar un texto que viene en JSon y decodificarloal convertilo en un objeto o arreglo y este arreglo tiene objetos y puedo acceder a sus propiedades
    $resultado= json_decode($jsonContenido);

    // print_r($resultado);

    foreach ($resultado as $persona ) {
        echo ($persona->nombre)." ".($persona->Apellido)."<br>";
    };
?>