<?php
INCLUDE 'Arraysdb.php';

$EJ = 0;

#FUNCION MEDIA DE PASAJEROS------------------------------------------------------------------------------------------
function Media_Pasajeros($text, $array4, $EJ){
$contador = 0;
foreach ($array4 as $array_4) {
    $Pasajeros = $array_4["Pasajeros"];
    $Vuelos = $array_4["Vuelo"];

if ($Vuelos == $text) {
    $EJ = $EJ + $Pasajeros;
    $contador++;
    }
}
    $EJ = $EJ/$contador;
    echo "La media de pasajeros es: ".$EJ."<br>";
}

#FUNCIÓN SABER ULTIMOS DESTINO-------------------------------------------------------------------------------------------------
function Ultimos_Destinos($text, $array1){
    echo "Los destinos a los que ha ido el avión han sido: ";
foreach ($array1 as $array_1) {
    $Destino = $array_1["Destino"];
    $Vuelos = $array_1["Vuelo"];
    
if ($Vuelos == $text) {
    
    echo $Destino." ";
    }
}
    echo "<br>";
}

#FUNCIÓN SABER DESTINOS-------------------------------------------------------------------------------------------------



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

#FUNCIÓN SABER MINUTOS TOTALES DE VUELO----------------------------------------------------------------------------------
function Minutos_Totales_Vuelo($text, $array3, $EJ){
foreach ($array3 as $array_3) {
    $Duracion_Minutos = $array_3["Duracion_Minutos"];
    $Vuelos = $array_3["Vuelo"];

if ($Vuelos == $text) {
    $EJ = $EJ + $Duracion_Minutos;
    }
}
echo "Los minutos totales de vuelo han sido: ".$EJ."<br>";
}



#FUNCIÓN MEDIA DE HORAS VOLADAS DE TODOS LOS VUELOS---------------------------------------------------------------------------




#FUNCIÓN NÚMERO TOTAL DE PASAJEROS DE TODOS LOS VUELOS---------------------------------------------------------------------------
function Numero_Total_Pasajeros($array4, $EJ){
    foreach ($array4 as $array_4) {
        $Pasajeros = $array_4["Pasajeros"];
        $Vuelos = $array_4["Vuelo"];
        
        $EJ = $EJ + $Pasajeros;
    }
    echo "El número total de pasajeros de todos los vuelos es: ".$EJ."<br>";
}

#FUNCIÓN PASAJEROS TOTALES POR AVION---------------------------------------------------------------------------
function Numero_Total_Pasajeros_Avion($array4, $text, $EJ){
    foreach ($array4 as $array_4) {
        $Pasajeros = $array_4["Pasajeros"];
        $Vuelos = $array_4["Vuelo"];
        
    if ($Vuelos == $text) {
        $EJ = $EJ + $Pasajeros;
        }
    }
    echo "El número total de pasajeros del avion: ".$EJ."<br>";
}

#FUNCIÓN NÚMERO DE AVIONES POR FABRICANTE---------------------------------------------------------------------------



#FUNCIÓN DESTINO CON MÁS CONEXIONES---------------------------------------------------------------------------


#FUNCIÓN DESTINO CON MENOS CONEXIONES---------------------------------------------------------------------------






#FUNCIÓN EL NÚMERO TOTALES DE CIUDADES VISITADAS---------------------------------------------------------------------------


#FUNCIÓN LAS VECES QUE SE HAN IDO A UNA DETERMINADA CIUDAD---------------------------------------------------------------------------


#FUNCIÓN CUAL ES LA CIUDAD MÁS VISITADA---------------------------------------------------------------------------


#FUNCIÓN CUALES SON LAS CIUDADES MENOS VISITADAS---------------------------------------------------------------------------






/*

#FUNCIÓN MEDIA DE HORAS VOLADAS---------------------------------------------------------------------------


#FUNCIÓN MEDIA DE PASAJEROS---------------------------------------------------------------------------




*/







?>