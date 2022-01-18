<?php


$text = "Iberia-WE44";
$array4 = array(
    array("Avion" => "Vueling-AE12", "personas" => 90),
    array("Avion" => "Volotea-EA21"  , "personas" => 75),
    array("Avion" => "Iberia-WE44", "personas" => 100),
    array("Avion" => "Ryanair-EW44" , "personas" => 60),
    array("Avion" => "Vueling-ZK87"  , "personas" => 77),
    array("Avion" => "Volotea-UA21"  , "personas" => 93),
    array("Avion" => "Iberia-WH44"  , "personas" => 86),
    array("Avion" => "Ryanair-EL00" , "personas" => 75),
    array("Avion" => "Vueling-AE12"  , "personas" => 87),
    array("Avion" => "Volotea-EA21"  , "personas" => 97),
    array("Avion" => "Iberia-WE44" , "personas" => 81),
    array("Avion" => "Ryanair-EW44" , "personas" => 75),
    array("Avion" => "Vueling-ZK87"  , "personas" => 87),
    array("Avion" => "Volotea-UA21" , "personas" => 90),
    array("Avion" => "Iberia-WH44"  , "personas" => 84),
    array("Avion" => "Ryanair-EL00" , "personas" => 67),
    array("Avion" => "Vueling-AE12" , "personas" => 86),
    array("Avion" => "Volotea-EA21"  , "personas" => 66),
    array("Avion" => "Iberia-WE44" , "personas" => 40),
    array("Avion" => "Ryanair-EW44"  , "personas" => 77),
    array("Avion" => "Vueling-ZK87" , "personas" => 82)
);

foreach ($array4 as $array_4) {

if ($array_4["Avion"] == $text) {
    $res = $array_4["personas"];
    echo $res;
}
}



#FUNCIÓN Media_Pasajeros
#function Media_Pasajeros($text){
 #   $suma_Personas = array_sum($array4);
  #  $total_Vuelos = count($array4);
   # $media = $suma_Personas/$total_Vuelos;
    #print "$media";
#}

# Media_Pasajeros($text);

#FUNCIÓN Ultimos_Destinos

#FUNCIÓN Fabricante

#FUNCIÓN Minutos_Totales_Vuelo


?>