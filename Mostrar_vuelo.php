<?php


#RECOGIDA DE VARIABLES
$text = $_POST["texto"];
$select = $_POST["Mostrar_Vuelos"];

#SWITCH DEL SELECT

switch ($select) {
    case 'Media_Pasajeros':
        Media_Pasajeros($text);
        break;
    case 'Ultimos_Destinos':
        Ultimos_Destinos($text);
        break;
    case 'Fabricante':
        Fabricante($text);
        break;
    case 'Minutos_Totales_Vuelo':
        Minutos_Totales_Vuelo($text);
        break;
    default:
    echo "Elija otra opción";
        break;
}
?>