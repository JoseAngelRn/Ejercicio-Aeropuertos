<?php
INCLUDE 'Arraysdb.php';

$EJ = 0;
$EJ2 = 0;

#FUNCION MEDIA DE PASAJEROS------------------------------------------------------------------------------------------
foreach ($array4 as $array_4) {
    $Pasajeros = $array_4["Pasajeros"];
    $Vuelos = $array_4["Vuelo"];
    #$Cantidad = array_count_values(array_column($array_4("Vuelos"))[$Pasajeros]);

if ($array_4["Vuelo"] == $text) {
    $EJ = $EJ + $Pasajeros;
    $res = $EJ;
    }
}
echo $res;
echo "<br>";

#FUNCIÓN SABER DESTINO-------------------------------------------------------------------------------------------------
function Ultimos_Destinos($text, $array1){
foreach ($array1 as $array_1) {
    $Destino = $array_1["Destino"];
    $Vuelos = $array_1["Vuelo"];

if ($Vuelos == $text) {
    echo "Los destinos a los que ha ido el avión han sido: ".$Destino."<br>";
    }
}
}
#Ultimos_Destinos($text, $array1);

#FUNCIÓN SABER FABRICANTE-------------------------------------------------------------------------------------------
function Fabricante($text, $array2){
foreach ($array2 as $array_2) {
    $Fabricante = $array_2["Fabricante"];
    $Vuelos = $array_2["Vuelo"];

if ($Vuelos == $text) {
    echo "El fabricante es: ".$Fabricante."<br>";
    }
}
}

#Fabricante($text, $array2);

#FUNCIÓN SABER MINUTOS TOTALES DE VUELO----------------------------------------------------------------------------------
function Minutos_Totales_Vuelo($text, $array3, $EJ2){
foreach ($array3 as $array_3) {
    $Duracion_Minutos = $array_3["Duracion_Minutos"];
    $Vuelos = $array_3["Vuelo"];

if ($Vuelos == $text) {
    $EJ2 = $EJ2 + $Duracion_Minutos;
    $res = $EJ2;
    }
}
echo "Los minutos totales de vuelo han sido: ".$res;
}

#Minutos_Totales_Vuelo($text, $array3, $EJ2);






#FUNCIÓN Media_Pasajeros
#function Media_Pasajeros($text){
 #   $suma_Pasajeros = array_sum($array4);
  #  $total_Vuelos = count($array4);
   # $media = $suma_Pasajeros/$total_Vuelos;
    #print "$media";
#}


?>