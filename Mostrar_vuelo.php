<?php


#RECOGIDA DE VARIABLES
$text = $_POST["texto"];
$select = $_POST["Mostrar_Vuelos"];

#SWITCH DEL SELECT

switch ($select) {
    case 'Vueling-AE12':
        Media_Pasajeros($text);
        Ultimos_Destinos($text);
        Fabricante($text);
        Minutos_Totales_Vuelo($text);
        break;
    case 'Volotea-EA21':
        Media_Pasajeros($text);
        Ultimos_Destinos($text);
        Fabricante($text);
        Minutos_Totales_Vuelo($text);
        break;
    case 'Iberia-WE44':
        Media_Pasajeros($text);
        Ultimos_Destinos($text);
        Fabricante($text);
        Minutos_Totales_Vuelo($text);
        break;
    case 'Ryanair-EW44':
        Media_Pasajeros($text);
        Ultimos_Destinos($text);
        Fabricante($text);
        Minutos_Totales_Vuelo($text);
        break;
    case 'Vueling-ZK87':
        Media_Pasajeros($text);
        Ultimos_Destinos($text);
        Fabricante($text);
        Minutos_Totales_Vuelo($text);
        break;
    case 'Volotea-UA21':
        Media_Pasajeros($text);
        Ultimos_Destinos($text);
        Fabricante($text);
        Minutos_Totales_Vuelo($text);
        break;
    case 'Iberia-WH44':
        Media_Pasajeros($text);
        Ultimos_Destinos($text);
        Fabricante($text);
        Minutos_Totales_Vuelo($text);
        break;
    case 'Ryanair-EL00':
        Media_Pasajeros($text);
        Ultimos_Destinos($text);
        Fabricante($text);
        Minutos_Totales_Vuelo($text);
        break;
    default:
        echo "Elija otra opción";
        break;
}

?>