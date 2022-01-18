<?php


#RECOGIDA DE VARIABLES
$text = $_POST["texto"];
$select = $_POST["Mostrar_Vuelos"];

#SWITCH DEL SELECT

switch ($select) {
    case 'Media_Pasajeros':
        Media_Pasajeros($);
        break;
    case 'Ultimos_Destinos':
        Ultimos_Destinos($);
        break;
    case 'Fabricante':
        Fabricante($);
        break;
    case 'Minutos_Totales_Vuelo':
        Minutos_Totales_Vuelo($);
        break;
    default:
    echo "Elija otra opción";
        break;
}
?>