<?php
include("BaseDatos.php");

if(isset($_POST["botonEnvio"])){

    //1. recibir datos desde la vista(interfaz del usuario)
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $descripcion=$_POST["descripcion"];
    $genero=$_POST["genero"];

    //2. crear una copia de la clase BaseDatos
    // crear un objeto de la clase BaseDatos
    $transaccion=new BaseDatos();

    //3. crear una consulta SQL para agreagar datos
    $consultaSQL="INSERT INTO usuarios(Nombre, Apellido,Descripcion,Genero)
     VALUES ('$nombre','$apellido','$descripcion','$genero')";

     //4. utilizar la funcion para insertar datos de la clase baseDatos
     $transaccion->agregarDatos(($consultaSQL));


}


?>