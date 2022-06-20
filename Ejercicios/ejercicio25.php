<?php
//clases heradadas
if ($_POST) {

    class PC {

        
        public $cpu; 
        public $gpu; 
        public $psu;
        public $case; 
        public $ssd;
        public $ram;
        public $mobo;
        

        private $name;

        public function MostrarName(){
            $this->name="FJ";
            return $this->name;
        }

         public function asignacion($cpu, $gpu, $case, $psu, $ssd, $ram, $mobo) {
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
            $this->mobo."<br/>";
         }
     }
     //Al hacer una clase heredada esta misma heredara las mismas propiedades y metodos que tiene su padre
     class espec extends PC {
        public $HerciosCPU;

        public function agregandoGHz($Ghz) {
            $this->HerciosCPU=$Ghz;
        }

        public function GHzCPU(){
            echo "Hey bro tu ".$this->cpu." tiene : ". $this->HerciosCPU."GHz";
        }

     }
     

     $cpuF=$_POST['cpu'];   
     $GHzf=$_POST['GHz'];
     $psuF=$_POST['psu'];
     $ssdF=$_POST['ssd'];
     $ramF=$_POST['ram'];
     $caseF=$_POST['case'];
     $moboF=$_POST['mobo'];
     $gpuF=$_POST['gpu'];

     $PC = new espec;
     $PC->agregandoGHz($GHzf);
     $PC->asignacion($cpuF,$gpuF,$caseF,$psuF,$ssdF,$ramF,$moboF);
     $PC-> imprimir();
     $PC->GHzCPU();

     echo "<br/>".$PC->MostrarName();//Propiedad privada

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
    <form action="ejercicio25.php" method="post" style="margin-top: 2%;">

        <input type="text" placeholder="1" name="cpu"><br>
        <input type="text" placeholder="Xd" name="GHz"><br>
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