<?php
INCLUDE_ONCE 'Arraysdb.php';
INCLUDE_ONCE 'Mostrar_vuelo.php';

$EJ = 0;

#FUNCION MEDIA DE PASAJEROS------------------------------------------------------------------------------------------
function Media_Pasajeros($text, $array4, $EJ){
foreach ($array4 as $array_4) {
    $Pasajeros = $array_4["Pasajeros"];
    $Vuelos = $array_4["Vuelo"];

if ($Vuelos == $text) {
    $EJ = $EJ + $Pasajeros;
    $res = $EJ;
    }
}
echo "La media de pasajeros es: ".$res."<br>";
}


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
function Minutos_Totales_Vuelo($text, $array3, $EJ){
foreach ($array3 as $array_3) {
    $Duracion_Minutos = $array_3["Duracion_Minutos"];
    $Vuelos = $array_3["Vuelo"];

if ($Vuelos == $text) {
    $EJ = $EJ + $Duracion_Minutos;
    $res = $EJ;
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