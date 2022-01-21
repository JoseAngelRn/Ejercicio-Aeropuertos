<?php
INCLUDE 'Funciones_Aeropuerto.php';

#RECOGIDA VARIABLES
$text = $_POST["Estadisticas_avion"];

#REPRESENTACIÓN
Destinos($text, $array1);
Fabricante($text, $array2);
Minutos_Totales_Vuelo($text, $array3, $EJ);
Media_Horas($text, $array3, $EJ);
Media_Pasajeros($text, $array4, $EJ);
Numero_Total_Pasajeros_Avion($array4, $text, $EJ);
?>