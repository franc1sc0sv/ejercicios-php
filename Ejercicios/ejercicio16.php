<?php
//Son instruciones que podemos utilizar varias veces


//Le vamos a pasar argumentos
//Valores por default
function print_name($name="",$lastname=""){
    //rutinas o instrucciones
echo "Hola ".$name." ".$lastname."<br/>";

}


//Llamar a funcion le paso argumentos

//Si tenemos dos argumentos a fuerzas nos va a pedir dos argumentos
print_name("FJ","PEREX");
print_name("xD");
print_name("","xD");
