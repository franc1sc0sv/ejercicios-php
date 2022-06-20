<?php include("./header.php") ?>
<?php include("./conexion.php") ?>
<?php


//Insertar datos 
if ($_POST) {
    // if ($_FILE) {
    $name = $_POST['name'];
    $description = $_POST['description']; //$description = (isset($_POST['description'])) ? $_POST['description'] : "";;
    //Que la imagen no se sobreescriba
    //Para que la imagen no se sobreescriba se le va agregar la fecha con la que se subio
    $fecha = new DateTime();
    $image = $fecha->getTimestamp() . "_" . $_FILES['image']['name'];
    $imgen_temporal = $_FILES['image']['tmp_name'];
    move_uploaded_file($imgen_temporal, "imagenes/" . $image);


    // print_r($_FILES['image']);
    // move_uploaded_file($_FILES['image']['tmp_name'],$_FILES['image']['name']);

    // $image = $_FILES['image']['name'];

    // $image =$_FILE['image'];

    $Objconexion = new conection();
    $sql = "INSERT INTO `proyectos` (`id`, `name`, `image`, `description`) VALUES (NULL, '$name', '$image', '$description');";
    $Objconexion->ejecutar($sql);
    // }
    header("location:portafolio.php");

}


//Eliminar datos
if ($_GET) {
    // DELETE FROM `proyectos` WHERE `proyectos`.`id` = 17
    $id = $_GET['delete'];
    $Objconexion = new conection();

    //Borrado de imagenes - se tiene que hacer mientras se hace una consulta
    //unlink permite un borrado
    $imagen = $Objconexion->consultar("SELECT image	 FROM `proyectos` WHERE id=" . $id);
    unlink("imagenes/" . $imagen[0]['image']);

    $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` =" . $id;
    $Objconexion->ejecutar($sql);
    header("location:portafolio.php");

}

//Selecionar datos
$Objconexion = new conection();
$proyectos = $Objconexion->consultar("SELECT * FROM `proyectos` ");

//print_r($resultado)





?>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">

                    Datos del proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">

                        Nombre del proyecto: <input required type="text" class="form-control" name="name" id="">
                        <br>
                        Imagen del proyecto: <input required type="file" class="form-control" name="image" id="">
                        <br>

                        Descripcion del proyecto: <textarea required name="description" class="form-control" id="" cols="30" rows="10"></textarea>

                        <br>
                        <input type="submit" class="btn btn-success" value="Enviar">

                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($proyectos as $proyecto) { ?>
                        <tr>
                            <td><?php echo $proyecto['id'] ?></td>
                            <td><?php echo $proyecto['name'] ?></td>
                            <td>
                                <img width="200" height="100" src="imagenes/<?php echo $proyecto['image'] ?>">
                            </td>
                            <td><?php echo $proyecto['description'] ?></td>
                            <td> <a class="btn btn-danger" href="?delete=<?php echo $proyecto['id'] ?>">Eliminar</a> </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<br>

<?php include("./footer.php"); ?>