<?php
include("BaseDatos.php");
if(isset($_POST["botonEnvio"])){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $descripcion=$_POST["descripcion"];
    $genero=$_POST["genero"];

    //crear una copia de la clase BaseDatos
    // crear un objeto de la clase BaseDatos
    $transaccion=new BaseDatos();
    $transaccion->conectarBD();


}


?>