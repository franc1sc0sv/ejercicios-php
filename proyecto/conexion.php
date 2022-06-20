<?php

//Conectar a la bd por medio de una clase

class conection{
    private $server="localhost";
    private $user="root";
    private $password="";
    private $conection;

    public function __construct(){
        try {
            $this->conection= new PDO("mysql:host=$this->server; dbname=album", $this->user, $this->password);
            $this->conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return "fallo de conexion".$e;

        }
    }

    public function ejecutar($sql){ //Insertar datos/delete/actualizar
        $this->conection->exec($sql);
        //Ejecuta una instrucion sql y nos regresa un id 
        return $this->conection->lastInsertId();
    }   

    public function consultar($sql){
        //ejecutar instruccion con prepare
        //Lo que va ser el prepare es tomar esa instruccion sql y almacenarla en la variable
        $sentencia=$this->conection->prepare($sql);
        $sentencia->execute();
        //Retorna todos los registros que pueda consultar con la sentencia sql
        return $sentencia->fetchAll();


    }
}




?>
