<?php
//Destruir variables desesion
//Primero las iniciamos
session_start();
//ya que las creamos se procede a destruirlas
session_destroy();

echo "Se destruyeron los datos de sesion";

?>
