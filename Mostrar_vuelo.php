<?php
INCLUDE_ONCE 'Funciones_Aeropuerto.php';

#RECOGIDA DE VARIABLES
$select = $_POST["Mostrar_Vuelos"];
$text = $_POST["text"];

#SWITCH DEL SELECT
switch ($select) {
    case 'Vueling-AE12':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ2);
        break;
    case 'Volotea-EA21':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ2);
        break;
    case 'Iberia-WE44':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ2);
        break;
    case 'Ryanair-EW44':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ2);
        break;
    case 'Vueling-ZK87':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ2);
        break;
    case 'Volotea-UA21':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ2);
        break;
    case 'Iberia-WH44':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ2);
        break;
    case 'Ryanair-EL00':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ2);
        break;
    default:
        echo "Elija otra opción";
        break;
}

?>