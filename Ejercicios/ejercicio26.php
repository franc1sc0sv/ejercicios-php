<?php
//Constructor
//Va ser propiamente un metodo 
//Perite crear un objeto a partir de un dato inicial
//Construye apartir de  la instancia
//__ El lenguaje detecta que va a pasar algo inicialmente
//


if ($_POST) {
    class PC {
        
        public $cpu; 
        public $gpu; 
        public $psu;
        public $case; 
        public $ssd;
        public $ram;
        public $mobo;

        //El lenguaje dectecta de que va a pasar algo inicialmente
        //Cuando yo cree el objeto a partir de la clase persona yo le paso los argumentos y de forma automatizada se asignan esos valores

        //Cuando se instancia el objecto autimaticamente eso se va encender 
        function __construct($cpu, $gpu, $case, $psu, $ssd, $ram, $mobo){
            $this->cpu=$cpu;
            $this->gpu=$gpu;
            $this->case=$case;
            $this->ssd=$ssd;
            $this->psu=$psu;
            $this->ram=$ram;
            $this->mobo=$mobo; 
            echo "Hola bro esta es tu pc:"."<br/>".
            $this->cpu."<br/>".
            $this->gpu."<br/>".
            $this->psu."<br/>".
            $this->ssd."<br/>".
            $this->case."<br/>".
            $this->ram."<br/>".
            $this->mobo;
        }
        //  public function imprimir(){
    
        //     echo "Hola bro esta es tu pc:"."<br/>".
        //     $this->cpu."<br/>".
        //     $this->gpu."<br/>".
        //     $this->psu."<br/>".
        //     $this->ssd."<br/>".
        //     $this->case."<br/>".
        //     $this->ram."<br/>".
        //     $this->mobo;
        //  }
     }
    

     $cpuF=$_POST['cpu'];
     $psuF=$_POST['psu'];
     $ssdF=$_POST['ssd'];
     $ramF=$_POST['ram'];
     $caseF=$_POST['case'];
     $moboF=$_POST['mobo'];
     $gpuF=$_POST['gpu'];

     //Pasandole los datos al contruccion apartir de la instancia del objeto
    $PC=new PC($cpuF,$gpuF,$caseF,$psuF,$ssdF,$ramF,$moboF); 

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
    <form action="ejercicio26.php" method="post" style="margin-top: 2%;">

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