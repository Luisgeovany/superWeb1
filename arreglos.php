<?php
$producto1="arroz";
$producto2="huevos";
$procucto3="fijoles";

//ARREGLO()
$canasta=array("arroz","huevos","frijoles");
echo($producto1);
echo("<br>");
print_r($canasta);
echo($canasta[1]);

//ARREGLO (Asociativo)
$canastaAsociativa=array("producto1"=>"arroz","producto2"=>"huevos","producto3"=>"frijoles");
echo("<br>");
echo("<br>");
print_r($canastaAsociativa);
echo("<br>");

echo($canastaAsociativa["producto3"]);
echo("<br>");

//CICLO FOR
/*for($centinela=0;$centinela<count($canasta);$centinela++){
    echo($canasta[0]);
    echo("<br>");
    echo($canasta[$centinela]);
    echo("<br>");
}
*/
// CICLO FOR EACH
echo("<br>");
echo("<br>");
foreach($canasta as $valor){
    echo($valor);
    echo("<br>");

}



?>