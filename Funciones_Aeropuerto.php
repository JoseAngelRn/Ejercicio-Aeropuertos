<?php


$text = "Iberia-WE44";
$EJ = 0;
$array4 = array(
    array("Vuelos" => "Vueling-AE12", "Pasajeros" => 90),
    array("Vuelos" => "Volotea-EA21"  , "Pasajeros" => 75),
    array("Vuelos" => "Iberia-WE44", "Pasajeros" => 100),
    array("Vuelos" => "Ryanair-EW44" , "Pasajeros" => 60),
    array("Vuelos" => "Vueling-ZK87"  , "Pasajeros" => 77),
    array("Vuelos" => "Volotea-UA21"  , "Pasajeros" => 93),
    array("Vuelos" => "Iberia-WH44"  , "Pasajeros" => 86),
    array("Vuelos" => "Ryanair-EL00" , "Pasajeros" => 75),
    array("Vuelos" => "Vueling-AE12"  , "Pasajeros" => 87),
    array("Vuelos" => "Volotea-EA21"  , "Pasajeros" => 97),
    array("Vuelos" => "Iberia-WE44" , "Pasajeros" => 81),
    array("Vuelos" => "Ryanair-EW44" , "Pasajeros" => 75),
    array("Vuelos" => "Vueling-ZK87"  , "Pasajeros" => 87),
    array("Vuelos" => "Volotea-UA21" , "Pasajeros" => 90),
    array("Vuelos" => "Iberia-WH44"  , "Pasajeros" => 84),
    array("Vuelos" => "Ryanair-EL00" , "Pasajeros" => 67),
    array("Vuelos" => "Vueling-AE12" , "Pasajeros" => 86),
    array("Vuelos" => "Volotea-EA21"  , "Pasajeros" => 66),
    array("Vuelos" => "Iberia-WE44" , "Pasajeros" => 40),
    array("Vuelos" => "Ryanair-EW44"  , "Pasajeros" => 77),
    array("Vuelos" => "Vueling-ZK87" , "Pasajeros" => 82)
);

foreach ($array4 as $array_4) {
    $Pasajeros = $array_4["Pasajeros"];
    $Vuelos = $array_4["Vuelos"];

if ($array_4["Vuelos"] == $text) {
    $EJ = $EJ + $Pasajeros;
    $res = $EJ/count($Vuelos);
    }
}

echo $res;


#FUNCIÓN Media_Pasajeros
#function Media_Pasajeros($text){
 #   $suma_Pasajeros = array_sum($array4);
  #  $total_Vuelos = count($array4);
   # $media = $suma_Pasajeros/$total_Vuelos;
    #print "$media";
#}

# Media_Pasajeros($text);

#FUNCIÓN Ultimos_Destinos

#FUNCIÓN Fabricante

#FUNCIÓN Minutos_Totales_Vuelo


?>