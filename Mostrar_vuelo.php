<?php
INCLUDE_ONCE 'Funciones_Mostrar_Vuelo.php';

#RECOGIDA DE VARIABLES
$text = $_POST["Mostrar_Vuelos"];

Ultimos_Destinos($text, $array1);
Fabricante($text, $array2);
Minutos_Totales_Vuelo($text, $array3, $EJ);
?>