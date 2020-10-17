<?php

// ARREGLOS DE UNA DIMENSION
$precios = array(1600,5000,2600);
$nombres = array("Arroz","Salchichas","huevos");
$marcas = array("Diana","Zenu","Avinal");

//ARREGLO MULTIDIMENSIONAL
$productos = array(
    array("arroz","diana",1600),
    array("salchichas","zenu",5000),
    array("huevos","avinal",2600)
);
print_r($productos);
echo("<br>");
echo("<br>");
print_r($productos);
echo("<br>");
print_r($productos[0]);
echo("<br>");
echo($productos[0][2]);
echo("<br>");

// RECORRER EL ARREGLO
foreach($productos as $valor){
    print_r($valor[0]);
    echo("<br>");

}
?>