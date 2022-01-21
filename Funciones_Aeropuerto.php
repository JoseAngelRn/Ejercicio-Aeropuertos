<?php
INCLUDE 'Arraysdb.php';


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
    $res = $EJ;
    }
}
echo "Los minutos totales de vuelo han sido: ".$res;
}



#FUNCIÓN MEDIA DE HORAS VOLADAS DE TODOS LOS VUELOS---------------------------------------------------------------------------


#FUNCIÓN NÚMERO TOTAL DE PASAJEROS DE TODOS LOS VUELOS---------------------------------------------------------------------------
function Numero_Total_Pasajeros($array4, $EJ){
    foreach ($array4 as $array_4) {
        $Pasajeros = $array_4["Pasajeros"];
        $Vuelos = $array_4["Vuelo"];
        
        $EJ = $EJ + $Pasajeros;
        $res = $EJ;

    }
    echo "El número total de pasajeros de todos los vuelos es: ".$res."<br>";
}


#FUNCIÓN NÚMERO DE AVIONES POR FABRICANTE---------------------------------------------------------------------------



#FUNCIÓN DESTINO CON MÁS CONEXIONES---------------------------------------------------------------------------


#FUNCIÓN DESTINO CON MENOS CONEXIONES---------------------------------------------------------------------------






#FUNCIÓN EL NÚMERO TOTALES DE CIUDADES VISITADAS---------------------------------------------------------------------------


#FUNCIÓN LAS VECES QUE SE HAN IDO A UNA DETERMINADA CIUDAD---------------------------------------------------------------------------


#FUNCIÓN CUAL ES LA CIUDAD MÁS VISITADA---------------------------------------------------------------------------


#FUNCIÓN CUALES SON LAS CIUDADES MENOS VISITADAS---------------------------------------------------------------------------






/*

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

*/







?>