<?php
//Codificar en formato json


$personas=array(
    //Trasnformar en formato json
    "oscar"=> 30,
    "lucy"=> 15,
    "FJ"=> 15
);

echo json_encode($personas);

//Consumir informacion idea propiamente de usar json - convertir arreglos en json - convertir json a arreglos

?>