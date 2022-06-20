<?php

//Recepcionar datos de un formulario 
//if ternario

$txtname = "";
$rdgusto = "";

$checboxCoger = "";
$checboxBesar = "";
$checboxCasarse = "";

$selecAnime = "";

$duda = "";

if ($_POST) {
    //if ternarrio accion de preguntar y reaccionar y utilizar en else
    //Parentesis para indicar que es un if
    // ? - de lo contrario
    //Si hay informacion en este txtname asignacelo
    $txtname = (isset($_POST['txtname'])) ? $_POST['txtname'] : "";
    //Input radio
    $rdgusto = (isset($_POST['XD'])) ? $_POST['XD'] : "";
    //checbox
    $checboxCoger = (isset($_POST['Coger']) == "true") ? "checked" : "";
    $checboxBesar = (isset($_POST['Besar']) == "true") ? "checked" : "";
    $checboxCasarse = (isset($_POST['Casarse']) == "true") ? "checked" : "";
    //CONSERVAR EL VALOR DEL INPUT
    $selecAnime = (isset($_POST['animeFAV'])) ? $_POST['animeFAV'] : "";
    //
    $duda = (isset($_POST['duda'])) ? $_POST['duda'] : "";


    //Ya teniendo los datos puedo realizar un query, modificar los datos para mostrar diferentes valores modificados, realizar algun calculo
}


///LOS IF TERNIARIOS SON GOD
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>

<body>

    <form action="ejercicio31.php" method="post">

        <!-- Codigo Enbebido-->
        <?php if ($_POST) { ?>
            <!-- Apertura de condicion-->
            <?php echo "Hola " . $txtname . " te gusta " . $rdgusto . ($checboxCoger == "checked" ? ", le gusta coger con $rdgusto" : "") . ($checboxBesar == "checked" ? ", le gusta besarse con $rdgusto" : "") . ($checboxCasarse == "checked" ? ", le gustaria casarse con $rdgusto" : "") ."<br>"; 
                echo "El anime favorito de ".$txtname." es ".$selecAnime."<br>";
                echo "Tu comentario es: ".$duda;
            ?><br><br>

        <?php } ?>
        <!-- cierre de condicion-->
        <!-- Se puede abarcar un grupo de html con etiquetas de php-->
        Nombre: <br>
        <input type="text" name="txtname" value="<?php echo $txtname; ?>"><br> <!-- CONSERVAR EL VALOR DEL INPUT -->

        <!--
            Conservar valores de input radio 
            Permite seleccionar una opcion
            El name tiene que ser el mismo
            Como lo va distingir si tienen el mismo nombre EL value
        

        Imprimir el valor de un radio con checked
        Se hace por medio de un if ternario que pregunta la igualdad de los valores 
    -->

        <br> Te gusta?:
        <br> adrian: <input type="radio" <?php echo ($rdgusto == "adrian") ? "checked" : ""; ?> name="XD" value="adrian">
        <br> saz: <input type="radio" <?php echo ($rdgusto == "saz" )? "checked" : ""; ?> name="XD" value="saz">
        <br> rodrigo: <input type="radio" <?php echo ($rdgusto == "rodrigo" )? "checked" : ""; ?> name="XD" value="rodrigo"><br>



        <!--
        Conservar valores de un checkbox
        Los names tienen que ser individuales
    -->
        <br>Que te gustaria hacer con <?php echo $txtname ?><br>
        Coger <input type="checkbox" name="Coger" <?php echo $checboxCoger ?> value="true"> <br>
        Besar <input type="checkbox" name="Besar" <?php echo $checboxBesar ?> value="true"><br>
        Casarse <input type="checkbox" name="Casarse" <?php echo $checboxCasarse ?> value="true"><br><br>


        Cual es tu anime favorito? <br>

        <select name="animeFAV">
            <option value="">[No me gusta el anime]</option>
            <option value="ReLIFE" <?php echo ($selecAnime == "ReLIFE" ? "selected" : ""); ?> >ReLIFE</option>
            <option value="Komi-san" <?php echo ($selecAnime == "Komi-san" ? "selected" : ""); ?> >Komi-san</option>
            <option value="Kaguya"<?php echo ($selecAnime == "Kaguya" ? "selected" : ""); ?> >Kaguya</option>
            <option value="Love-after"<?php echo ($selecAnime == "Love-after" ? "selected" : ""); ?> >Love-after</option>
        </select>
        
        <br><br> Tienes alguna duda? <br>
        <textarea name="duda" id="" cols="30" rows="10"></textarea>

        <br><br><input type="submit" value="Enviar">
    </form>
</body>

</html>