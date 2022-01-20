<?php
INCLUDE_ONCE 'Arraysdb.php';
INCLUDE_ONCE 'Estadistica_Aeropuerto.php';

#FUNCIÓN MEDIA DE HORAS VOLADAS DE TODOS LOS VUELOS---------------------------------------------------------------------------


#FUNCIÓN NÚMERO TOTAL DE PASAJEROS DE TODOS LOS VUELOS---------------------------------------------------------------------------
function Numero_Total_Pasajeros($array4, $EJ){
    foreach ($array4 as $array_4) {
        $Pasajeros = $array_4["Pasajeros"];
        $Vuelos = $array_4["Vuelo"];
        
        $EJ = $EJ + $Pasajeros;
        $res = $EJ;

    }
    echo "El número total de pasajeros de todos los vuelo es: ".$res;
}
#Numero_Total_Pasajeros($array4, $EJ2);

#FUNCIÓN NÚMERO DE AVIONES POR FABRICANTE---------------------------------------------------------------------------


#FUNCIÓN DESTINO CON MÁS CONEXIONES---------------------------------------------------------------------------


#FUNCIÓN DESTINO CON MENOS CONEXIONES---------------------------------------------------------------------------


?>