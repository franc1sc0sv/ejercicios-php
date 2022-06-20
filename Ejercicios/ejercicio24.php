<?php
//clases
if ($_POST) {
    class PC {

        //visibilidad de las propiedades
        //Denotan visibilidad
                ///private
        // este dato se va acceder unicamente por la clse pero va tener resticciones al invocarla porque la clase tiene la propiedad privada y solo puede ser utilizada por los metodos o alteradas en la misma clase - Unicamente se puede acceder de la clase que lo definio
                ///protected
        //identificar a otros elementos u otros accesos - DEFINIDO solo se puede accede desde la misma y mediante la clases heredadas

        ////

        //Encapsulamiento declarar especificamente los datos conteplando el tipo de visibilidad
        
        //Propiedades
        public $cpu; 
        public $gpu; 
        public $psu;
        public $case; 
        public $ssd;
        public $ram;
        public $mobo;
    
        private $name;

        //Para acceder a los datos de una propiedad privada se debe de usar un metodo que lo altere y nos retorne un valor
        //SI NO HAY UN METODO QUE ALTERE ESE DATO QUE ESTE EN LA CLASE NO VOY A DEJAR QUE NADIE MAS LO ALTERE
        //Sirve para dejar que esa variable no se altere por terceros

        public function MostrarName(){
            $this->name="FJ";
            return $this->name;
        }

         public function asignacion($cpu, $gpu, $case, $psu, $ssd, $ram, $mobo) { // acciones o metodos
            $this->cpu=$cpu;
            $this->gpu=$gpu;
            $this->case=$case;
            $this->ssd=$ssd;
            $this->psu=$psu;
            $this->ram=$ram;
            $this->mobo=$mobo;
         }
    
         public function imprimir(){
    
            echo "Hola bro esta es tu pc:"."<br/>".
            $this->cpu."<br/>".
            $this->gpu."<br/>".
            $this->psu."<br/>".
            $this->ssd."<br/>".
            $this->case."<br/>".
            $this->ram."<br/>".
            $this->mobo;
         }
     }
    

     $cpuF=$_POST['cpu'];
     $psuF=$_POST['psu'];
     $ssdF=$_POST['ssd'];
     $ramF=$_POST['ram'];
     $caseF=$_POST['case'];
     $moboF=$_POST['mobo'];
     $gpuF=$_POST['gpu'];


     $PC=new PC; //Instancia o creacion de objetos
     $PC->asignacion($cpuF,$gpuF,$caseF,$psuF,$ssdF,$ramF,$moboF); //Llamando a un metodo como el metodo es una funcion le tengo que pasar las variables cos los datos del formulario para que se le asignen a su respectiva propiedad
     $PC-> imprimir();

     //Llamando a la clase publica que me altera la propiedad privada e imprimirlo
     //El valor que retorna la funcion es el que se va a imprimir
     echo "<br/>".$PC->MostrarName();

}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale= name="cpu"1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio24.php" method="post" style="margin-top: 2%;">

        <input type="text" placeholder="1" name="cpu"><br>
        <input type="text" placeholder="2" name="psu"><br>
        <input type="text" placeholder="3" name="gpu"><br>
        <input type="text" placeholder="4" name="ram"><br>
        <input type="text" placeholder="5" name="case"><br>
        <input type="text" placeholder="6" name="mobo"><br>
        <input type="text" placeholder="7" name="ssd"><br>


        <input type="submit" value="enviar">

    </form>
</body>
</html>