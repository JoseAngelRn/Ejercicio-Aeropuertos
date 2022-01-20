<?php
INCLUDE_ONCE 'Arraysdb.php';
INCLUDE_ONCE 'Estadistica_Avion.php';

$EJ=0;

#FUNCIÓN DESTINOS DEL AVIÓN---------------------------------------------------------------------------
function Destinos_Visitados($text, $array1){
    foreach ($array1 as $array_1) {
        $Destino = $array_1["Destino"];
        $Vuelos = $array_1["Vuelo"];
    
    if ($Vuelos == $text) {
        echo "Destinos: ".$Destino."<br>";
        }
    }
    }

#FUNCIÓN FABRICANTE DEL AVIÓN---------------------------------------------------------------------------
function Fabricante($text, $array2){
    foreach ($array2 as $array_2) {
        $Fabricante = $array_2["Fabricante"];
        $Vuelos = $array_2["Vuelo"];
    
    if ($Vuelos == $text) {
        echo "El fabricante es: ".$Fabricante."<br>";
        }
    }
    }

#FUNCIÓN MINUTOS TOTALES VOLADOS---------------------------------------------------------------------------
function Minutos_Totales_Vuelo($text, $array3, $EJ){
    foreach ($array3 as $array_3) {
        $Duracion_Minutos = $array_3["Duracion_Minutos"];
        $Vuelos = $array_3["Vuelo"];
    
    if ($Vuelos == $text) {
        $EJ = $EJ + $Duracion_Minutos;
        $res = $EJ;
        }
    }
    echo "Los minutos totales de vuelo han sido: ".$res."<br>";
    }

#FUNCIÓN MEDIA DE HORAS VOLADAS---------------------------------------------------------------------------


#FUNCIÓN MEDIA DE PASAJEROS---------------------------------------------------------------------------


#FUNCIÓN PASAJEROS TOTALES---------------------------------------------------------------------------
function Numero_Total_Pasajeros($array4, $text, $EJ){
    foreach ($array4 as $array_4) {
        $Pasajeros = $array_4["Pasajeros"];
        $Vuelos = $array_4["Vuelo"];
        
    if ($Vuelos == $text) {
        $EJ = $EJ + $Pasajeros;
        $res = $EJ;
        }
    }
    echo "El número total de pasajeros del avion: ".$res."<br>";
}

?>