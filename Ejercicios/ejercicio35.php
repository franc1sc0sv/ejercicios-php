<?php
//Lectura de regfistros que teniamos en un Json

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";
//Lectura de sitios seguros de htpps
$opcion =array("ssl"=> array("verify_peer"=>false, "verify_peer_name"=>false));//Opciones para que nos deje leer
//Desactivar compatibilidad para que me deje leer la info


//Me permite leer todo el contenido y convertilo a string y poder decodificarlo en un formato de objetos y arreglos para que podamos leer la info
//Opcion para utilizar las opciones de desactivado de la lectura en los parametros de configuracion - Desactivar la restriccion que tenemos con htpps y leer en contenido
$respuesta=file_get_contents($url,false,stream_context_create($opcion));
$objrespuesta=json_decode($respuesta);

// print_r($objrespuesta);

// foreach ($objrespuesta->list as $video) {
//     print_r($video->title."<br/>");
//     print_r($video->channel."<br/>");
// }
// ?>


<ul>

    <?php foreach ($objrespuesta->list as $video) { ?>
        <?php //Cada ves que gire va a sacar un registro de video ?>
        <li><?php echo $video->title; ?> | <?php echo $video->channel; ?></li>
    <?php }?>
</ul>