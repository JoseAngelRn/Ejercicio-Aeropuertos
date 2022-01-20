<?php
INCLUDE_ONCE 'Funciones_Mostrar_Vuelo.php';

#RECOGIDA DE VARIABLES
$select = $_POST["Mostrar_Vuelos"];
$text = $_POST["text"];

#SWITCH DEL SELECT
switch ($select) {
    case 'Vueling-AE12':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        break;
    case 'Volotea-EA21':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        break;
    case 'Iberia-WE44':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        break;
    case 'Ryanair-EW44':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        break;
    case 'Vueling-ZK87':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        break;
    case 'Volotea-UA21':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        break;
    case 'Iberia-WH44':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        break;
    case 'Ryanair-EL00':
        Media_Pasajeros($text, $array4, $EJ);
        Ultimos_Destinos($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        break;
    default:
        echo "Elija otra opción";
        break;
}

?>