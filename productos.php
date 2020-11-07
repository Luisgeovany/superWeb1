<?php
include("BDtiendaweb1.php");
if (isset($_POST["botonRegistrar"])){
    $nombre=$_POST["nombre"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $transaccion=new BaseDatos();
    $transaccion->conectarBD();
}




?>