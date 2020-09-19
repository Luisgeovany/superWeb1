<?php

$producto1="Arroz";
$producto2="Frijoles";
$producto3="Huevos";
$producto4="Panela";
$producto5="Cafe";
$producto6="Pasta";
$producto7="Aguardiente";
$producto8="Papas";
$producto9="Carne";
$producto10="Sal";

$precio1=6000;
$precio2=10000;
$precio3=8000;
$precio4=4000;
$precio5=12500;
$precio6=6000;
$precio7=15000;
$precio8=6000;
$precio9=25000;
$precio10=800;

$total= $precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;

$total=50000;
if($total<=80000){
    echo("Gracias por su compra");
}else{
    echo("Debe pedir fiado");
}


?>