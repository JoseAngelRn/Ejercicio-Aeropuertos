<?php
INCLUDE_ONCE 'Funciones_Estadisticas_Avion.php';

#RECOGIDA VARIABLES
$select = $_POST["Estadisticas_avion"];
$text = $_POST["text"];

#SWITCH DEL SELECT
switch ($select) {
    case 'Vueling-AE12':
        Destinos_Visitados($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        Numero_Total_Pasajeros($array4, $text, $EJ);
        break;
    case 'Volotea-EA21':
        Destinos_Visitados($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        Numero_Total_Pasajeros($array4, $text, $EJ);
        break;
    case 'Iberia-WE44':
        Destinos_Visitados($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        Numero_Total_Pasajeros($array4, $text, $EJ);
        break;
    case 'Ryanair-EW44':
        Destinos_Visitados($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        Numero_Total_Pasajeros($array4, $text, $EJ);
        break;
    case 'Vueling-ZK87':
        Destinos_Visitados($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        Numero_Total_Pasajeros($array4, $text, $EJ);
        break;
    case 'Volotea-UA21':
        Destinos_Visitados($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        Numero_Total_Pasajeros($array4, $text, $EJ);
        break;
    case 'Iberia-WH44':
        Destinos_Visitados($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        Numero_Total_Pasajeros($array4, $text, $EJ);
        break;
    case 'Ryanair-EL00':
        Destinos_Visitados($text, $array1);
        Fabricante($text, $array2);
        Minutos_Totales_Vuelo($text, $array3, $EJ);
        Numero_Total_Pasajeros($array4, $text, $EJ);
        break;
    default:
        echo "Elija otra opción";
        break;
}

?>