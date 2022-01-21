<?php
INCLUDE 'Funciones_Aeropuerto.php';

#RECOGIDA VARIABLES
$text = $_POST["Estadisticas_avion"];

Destinos($text, $array1);
Fabricante($text, $array2);
Minutos_Totales_Vuelo($text, $array3, $EJ);
#
#
Numero_Total_Pasajeros_Avion($array4, $text, $EJ);
?>