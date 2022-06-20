<?php include("./header.php"); ?>
<?php include("./conexion.php") ?>
<?php
$Objconexion = new conection();
$proyectos = $Objconexion->consultar("SELECT * FROM `proyectos` ");
?>


<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Bienvenid@s</h1>
        <p class="lead">Este es un portafolio privado</p>
        <hr class="my-2">
        <p>Mas informacion</p>
    </div>
</div>
<br>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($proyectos as $proyecto) { ?>

        <div class="col">
            <div class="card">
            <img height="300" src="imagenes/<?php echo $proyecto['image'] ?>" class="card-img-top" alt="xD">
                <div class="card-body">
                <h5 class="card-title"><?php echo $proyecto['name'] ?></h5>
                <p class="card-text"><?php echo $proyecto['description'] ?></p>
                </div>
            </div>
        </div>

    <?php } ?>

</div>


<br>
<?php include("./footer.php"); ?>