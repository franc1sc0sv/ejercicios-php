<?php


$A=array("A", "B", "C");
 
//Entre corchetes va indicar el indice del arreglo

//Lectuas de arreglos numericos
print_r($A);

echo $A[2]."<br/>";//Imprimir un unico indice


//imprimir todos los arreglos
for ($i=0; $i <= 2;$i++) { 
    echo $A[$i]."<br/> ";
}

//
$frutas =array(
    "f" => "fresa",
    "m" => "manzana",
    "p" => "pera",
    "j" => "jocote"
);
//Lectura de arreglos asociativos
print_r($frutas);
echo $frutas["j"]."<br/> ";//Imprimir indices asociativos
//imprimir todos los arreglos asociativos
//Foreach

//arreglo + se van leerd e la siguiente forma
foreach($frutas as $indice=>&$valor) {

    // echo $valor."<br/>";
    echo $frutas[$indice]."<br/>";

}



