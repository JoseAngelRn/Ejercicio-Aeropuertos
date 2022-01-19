<?php


$text = "Vueling-AE12";
$EJ = 0;
$EJ2 = 0;


$array1 = array(
    array("Vuelos" => "Vueling-AE12", "Destino" => "Milán"),
    array("Vuelos" => "Volotea-EA21", "Destino" => "Roma"),
    array("Vuelos" => "Iberia-WE44", "Destino" => "Estambul"),
    array("Vuelos" => "Ryanair-EW44", "Destino" => "Madrid"),
    array("Vuelos" => "Vueling-ZK87", "Destino" => "Lima"),
    array("Vuelos" => "Volotea-UA21", "Destino" => "Bilbao"),
    array("Vuelos" => "Iberia-WH44", "Destino" => "Roma"),
    array("Vuelos" => "Ryanair-EL00", "Destino" => "Madrid"),
    array("Vuelos" => "Vueling-AE12", "Destino" => "Roma"),
    array("Vuelos" => "Volotea-EA21", "Destino" => "Roma")
);

$array2 = array(
    array("Vuelos" => "Vueling-AE12", "Fabricante" => "Boeing"),
    array("Vuelos" => "Volotea-EA21", "Fabricante" => "Airbus"),
    array("Vuelos" => "Iberia-WE44", "Fabricante" => "Airbus"),
    array("Vuelos" => "Ryanair-EW44", "Fabricante" => "Boeing"),
    array("Vuelos" => "Vueling-ZK87", "Fabricante" => "Airbus"),
    array("Vuelos" => "Volotea-UA21", "Fabricante" => "Boeing"),
    array("Vuelos" => "Iberia-WH44", "Fabricante" => "Boeing"),
    array("Vuelos" => "Ryanair-EL00", "Fabricante" => "Airbus")
);

$array3 = array(
    array("Vuelos" => "Vueling-AE12", "Duracion_Minutos" => 120),
    array("Vuelos" => "Volotea-EA21", "Duracion_Minutos" => 100),
    array("Vuelos" => "Iberia-WE44", "Duracion_Minutos" => 340),
    array("Vuelos" => "Ryanair-EW44", "Duracion_Minutos" => 45),
    array("Vuelos" => "Vueling-ZK87", "Duracion_Minutos" => 600),
    array("Vuelos" => "Volotea-UA21", "Duracion_Minutos" => 65),
    array("Vuelos" => "Iberia-WH44", "Duracion_Minutos" => 90),
    array("Vuelos" => "Ryanair-EL00", "Duracion_Minutos" => 50),
    array("Vuelos" => "Vueling-AE12", "Duracion_Minutos" => 115),
    array("Vuelos" => "Volotea-EA21", "Duracion_Minutos" => 100),
    array("Vuelos" => "Iberia-WE44", "Duracion_Minutos" => 85),
    array("Vuelos" => "Ryanair-EW44", "Duracion_Minutos" => 360)
);

$array4 = array(
    array("Vuelos" => "Vueling-AE12", "Pasajeros" => 90),
    array("Vuelos" => "Volotea-EA21", "Pasajeros" => 75),
    array("Vuelos" => "Iberia-WE44", "Pasajeros" => 100),
    array("Vuelos" => "Ryanair-EW44", "Pasajeros" => 60),
    array("Vuelos" => "Vueling-ZK87", "Pasajeros" => 77),
    array("Vuelos" => "Volotea-UA21", "Pasajeros" => 93),
    array("Vuelos" => "Iberia-WH44", "Pasajeros" => 86),
    array("Vuelos" => "Ryanair-EL00", "Pasajeros" => 75),
    array("Vuelos" => "Vueling-AE12" , "Pasajeros" => 87),
    array("Vuelos" => "Volotea-EA21", "Pasajeros" => 97),
    array("Vuelos" => "Iberia-WE44", "Pasajeros" => 81),
    array("Vuelos" => "Ryanair-EW44", "Pasajeros" => 75),
    array("Vuelos" => "Vueling-ZK87", "Pasajeros" => 87),
    array("Vuelos" => "Volotea-UA21", "Pasajeros" => 90),
    array("Vuelos" => "Iberia-WH44", "Pasajeros" => 84),
    array("Vuelos" => "Ryanair-EL00", "Pasajeros" => 67),
    array("Vuelos" => "Vueling-AE12", "Pasajeros" => 86),
    array("Vuelos" => "Volotea-EA21", "Pasajeros" => 66),
    array("Vuelos" => "Iberia-WE44", "Pasajeros" => 40),
    array("Vuelos" => "Ryanair-EW44", "Pasajeros" => 77),
    array("Vuelos" => "Vueling-ZK87", "Pasajeros" => 82)
);
#FUNCION MEDIA DE PASAJEROS
foreach ($array4 as $array_4) {
    $Pasajeros = $array_4["Pasajeros"];
    $Vuelos = $array_4["Vuelos"];
    #$Cantidad = array_count_values(array_column($array_4("Vuelos"))[$Pasajeros]);

if ($array_4["Vuelos"] == $text) {
    $EJ = $EJ + $Pasajeros;
    $res = $EJ;
    }
}
echo $res;
echo "<br>";

#FUNCIÓN SABER DESTINO
function Ultimos_Destinos($text, $array1){
foreach ($array1 as $array_1) {
    $Destino = $array_1["Destino"];
    $Vuelos = $array_1["Vuelos"];

if ($Vuelos == $text) {
    echo "Los destinos a los que ha ido el avión han sido: ".$Destino."<br>";
    }
}
}
Ultimos_Destinos($text, $array1);

#FUNCIÓN SABER FABRICANTE
function Fabricante($text, $array2){
foreach ($array2 as $array_2) {
    $Fabricante = $array_2["Fabricante"];
    $Vuelos = $array_2["Vuelos"];

if ($Vuelos == $text) {
    echo "El fabricante es: ".$Fabricante."<br>";
    }
}
}

Fabricante($text, $array2);

#FUNCIÓN SABER MINUTOS TOTALES DE VUELO
function Minutos_Totales_Vuelo($text, $array3, $EJ2){
foreach ($array3 as $array_3) {
    $Duracion_Minutos = $array_3["Duracion_Minutos"];
    $Vuelos = $array_3["Vuelos"];

if ($Vuelos == $text) {
    $EJ2 = $EJ2 + $Duracion_Minutos;
    $res = $EJ2;
    }
}
echo "Los minutos totales de vuelo han sido: ".$res;
}

Minutos_Totales_Vuelo($text, $array3, $EJ2);

#FUNCIÓN Media_Pasajeros
#function Media_Pasajeros($text){
 #   $suma_Pasajeros = array_sum($array4);
  #  $total_Vuelos = count($array4);
   # $media = $suma_Pasajeros/$total_Vuelos;
    #print "$media";
#}


?>