<?php
INCLUDE 'Funciones_Aeropuerto.php';

#RECOGIDA DE VARIABLES
$text = $_POST["Mostrar_Vuelos"];

Media_Pasajeros($text, $array4, $EJ);
Ultimos_Destinos($text, $array1);
Fabricante($text, $array2);
Minutos_Totales_Vuelo($text, $array3, $EJ);
?>