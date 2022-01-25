<?php
INCLUDE 'Funciones_Aeropuerto.php';

#RECOGIDA DE VARIABLES
$text = $_POST["Mostrar_Vuelos"];


#REPRESENTACIÓN
echo "<h2 style='color:FF5733;'>".$text."</h2>";
Media_Pasajeros($text, $array4, $EJ);
Destinos($text, $array1);
Fabricante($text, $array2);
Minutos_Totales_Vuelo($text, $array3, $EJ);
?>