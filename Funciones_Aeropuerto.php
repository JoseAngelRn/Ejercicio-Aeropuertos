<?php
INCLUDE 'Arraysdb.php';

$EJ = 0;

#FUNCION MEDIA DE PASAJEROS------------------------------------------------------------------------------------------
function Media_Pasajeros($text, $array4, $EJ){
$contador = 0;
foreach ($array4 as $array_4) {
    $Pasajeros = $array_4["Pasajeros"];
    $Vuelos = $array_4["Vuelo"];

if ($Vuelos == $text) {
    $EJ = $EJ + $Pasajeros;
    $contador++;
    }
}
    $EJ = $EJ/$contador;
    echo "La media de pasajeros es: ".$EJ."<br>";
}

#FUNCIÓN SABER ULTIMOS DESTINO-------------------------------------------------------------------------------------------------
function Destinos($text, $array1){
    echo "Los destinos a los que ha ido el avión han sido: ";
foreach ($array1 as $array_1) {
    $Destino = $array_1["Destino"];
    $Vuelos = $array_1["Vuelo"];
    
if ($Vuelos == $text) {
    
    echo $Destino." ";
    }
}
    echo "<br>";
}

#FUNCIÓN SABER FABRICANTE-------------------------------------------------------------------------------------------
function Fabricante($text, $array2){
foreach ($array2 as $array_2) {
    $Fabricante = $array_2["Fabricante"];
    $Vuelos = $array_2["Vuelo"];

if ($Vuelos == $text) {
    echo "El fabricante es: ".$Fabricante."<br>";
    }
}
}

#FUNCIÓN SABER MINUTOS TOTALES DE VUELO----------------------------------------------------------------------------------
function Minutos_Totales_Vuelo($text, $array3, $EJ){
foreach ($array3 as $array_3) {
    $Duracion_Minutos = $array_3["Duracion_Minutos"];
    $Vuelos = $array_3["Vuelo"];

if ($Vuelos == $text) {
    $EJ = $EJ + $Duracion_Minutos;
    }
}
echo "Los minutos totales de vuelo han sido: ".$EJ."<br>";
}

#FUNCIÓN MEDIA DE HORAS VOLADAS DE TODOS LOS VUELOS---------------------------------------------------------------------------
function Media_Horas_Total($array3, $EJ){
    $contador = 0;
    foreach ($array3 as $array_3) {
        $Duracion_Minutos = $array_3["Duracion_Minutos"];
    
        $EJ = $EJ + $Duracion_Minutos;
        $contador++;
    }
        $EJ = $EJ/$contador;
        $EJ = $EJ/60;
        echo "La media de horas voladas de todos los vuelos es: ".$EJ." Horas"."<br>";
    }

#FUNCIÓN NÚMERO TOTAL DE PASAJEROS DE TODOS LOS VUELOS---------------------------------------------------------------------------
function Numero_Total_Pasajeros($array4, $EJ){
    foreach ($array4 as $array_4) {
        $Pasajeros = $array_4["Pasajeros"];
        
        $EJ = $EJ + $Pasajeros;
    }
    echo "El número total de pasajeros de todos los vuelos es: ".$EJ."<br>";
}

#FUNCIÓN PASAJEROS TOTALES POR AVION---------------------------------------------------------------------------
function Numero_Total_Pasajeros_Avion($array4, $text, $EJ){
    foreach ($array4 as $array_4) {
        $Pasajeros = $array_4["Pasajeros"];
        $Vuelos = $array_4["Vuelo"];
        
    if ($Vuelos == $text) {
        $EJ = $EJ + $Pasajeros;
        }
    }
    echo "El número total de pasajeros del avion: ".$EJ."<br>";
}

#FUNCIÓN NÚMERO DE AVIONES POR FABRICANTE---------------------------------------------------------------------------
function Aviones_fabricante($array2){
    $contador_Boeing = 0;
    $contador_Airbus = 0;

    foreach ($array2 as $array_2) {
        $Fabricante = $array_2["Fabricante"];
        
    if ($Fabricante == "Boeing") {
        $contador_Boeing++;
        }
    elseif($Fabricante == "Airbus"){
        $contador_Airbus++; 
        }
    }
    echo "Números aviones Boeing: ".$contador_Boeing."<br>";
    echo "Números aviones Airbus: ".$contador_Airbus."<br>";
}

#FUNCIÓN DESTINO CON MÁS CONEXIONES---------------------------------------------------------------------------
function Destino_mas($array1){
    $contador_Milan = 0;
    $contador_Roma = 0;
    $contador_Estambul = 0;
    $contador_Madrid = 0;
    $contador_Lima = 0;
    $contador_Bilbao = 0;

    foreach ($array1 as $array_1) {
        $Destino = $array_1["Destino"];
    if ($Destino == "Milán") {
        $contador_Milan++;
        }
    elseif($Destino == "Roma"){
        $contador_Roma++; 
        }
    elseif($Destino == "Estambul"){
        $contador_Estambul++; 
        }
    elseif($Destino == "Madrid"){
        $contador_Madrid++; 
        }
    elseif($Destino == "Lima"){
        $contador_Lima++; 
        }
    elseif($Destino == "Bilbao"){
        $contador_Bilbao++; 
        }
    }
    $mas = max($contador_Milan, $contador_Roma, $contador_Estambul, $contador_Madrid, $contador_Lima, $contador_Bilbao);    
    echo "El destino con mas conexiones es: ".$Destino." con ".$mas." conexiones"."<br>";
}

#FUNCIÓN DESTINO CON MENOS CONEXIONES---------------------------------------------------------------------------
/*function Destino_menos($array1){
    $contador_Milan = 0;
    $contador_Roma = 0;
    $contador_Estambul = 0;
    $contador_Madrid = 0;
    $contador_Lima = 0;
    $contador_Bilbao = 0;
    $contador_Total = 0;

    foreach ($array1 as $array_1) {
        $Destino = $array_1["Destino"];

    if ($Destino == "Milán") {
        $contador_Milan++;
        }
    elseif($Destino == "Roma"){
        $contador_Roma++; 
        }
    elseif($Destino == "Estambul"){
        $contador_Estambul++; 
        }
    elseif($Destino == "Madrid"){
        $contador_Madrid++; 
        }
    elseif($Destino == "Lima"){
        $contador_Lima++; 
        }
    elseif($Destino == "Bilbao"){
        $contador_Bilbao++; 
        }
    $contador_Total = min($contador_Milan, $contador_Roma, $contador_Estambul, $contador_Madrid, $contador_Lima, $contador_Bilbao);
    }
    
    echo "El destino con menos conexiones es: ".$Destino." con ".$contador_Total." conexiones"."<br>";
}
*/
#FUNCIÓN EL NÚMERO TOTALES DE CIUDADES VISITADAS---------------------------------------------------------------------------
function Numero_Ciudad_Total($array1){
        foreach ($array1 as $array_1) {
        $Destino = $array_1["Destino"];
        
    $o = str_word_count($Destino);
        

echo $o."<br>";




    
}
}
#FUNCIÓN LAS VECES QUE SE HAN IDO A UNA DETERMINADA CIUDAD---------------------------------------------------------------------------
function Numero_Ciudad($array1){
        $contador_Milan = 0;
        $contador_Roma = 0;
        $contador_Estambul = 0;
        $contador_Madrid = 0;
        $contador_Lima = 0;
        $contador_Bilbao = 0;
    
        foreach ($array1 as $array_1) {
            $Destino = $array_1["Destino"];
        if ($Destino == "Milán") {
            $contador_Milan++;
            }
        elseif($Destino == "Roma"){
            $contador_Roma++; 
            }
        elseif($Destino == "Estambul"){
            $contador_Estambul++; 
            }
        elseif($Destino == "Madrid"){
            $contador_Madrid++; 
            }
        elseif($Destino == "Lima"){
            $contador_Lima++; 
            }
        elseif($Destino == "Bilbao"){
            $contador_Bilbao++; 
            }
        }
        echo "Veces que se ha ido a Milán: ".$contador_Milan."<br>";
        echo "Veces que se ha ido a Roma: ".$contador_Roma."<br>";
        echo "Veces que se ha ido a Estambul: ".$contador_Estambul."<br>";
        echo "Veces que se ha ido a Madrid: ".$contador_Madrid."<br>";
        echo "Veces que se ha ido a Lima: ".$contador_Lima."<br>";
        echo "Veces que se ha ido a Bilbao: ".$contador_Bilbao."<br>";
    }

#FUNCIÓN CUAL ES LA CIUDAD MÁS VISITADA---------------------------------------------------------------------------
function Ciudad_mas($array1){






    
}

#FUNCIÓN CUALES SON LAS CIUDADES MENOS VISITADAS---------------------------------------------------------------------------
function Ciudad_menos(){
    $contador_Milan = 0;
    $contador_Roma = 0;
    $contador_Estambul = 0;
    $contador_Madrid = 0;
    $contador_Lima = 0;
    $contador_Bilbao = 0;

    foreach ($array1 as $array_1) {
        $Destino = $array_1["Destino"];
    if ($Destino == "Milán") {
        $contador_Milan++;
        }
    elseif($Destino == "Roma"){
        $contador_Roma++; 
        }
    elseif($Destino == "Estambul"){
        $contador_Estambul++; 
        }
    elseif($Destino == "Madrid"){
        $contador_Madrid++; 
        }
    elseif($Destino == "Lima"){
        $contador_Lima++; 
        }
    elseif($Destino == "Bilbao"){
        $contador_Bilbao++; 
        }
    }
    echo "Ciud".$contador_Milan."<br>";
}

#FUNCIÓN MEDIA DE HORAS VOLADAS DE UN VUELO---------------------------------------------------------------------------
function Media_Horas($text, $array3, $EJ){
    $contador = 0;
    foreach ($array3 as $array_3) {
        $Duracion_Minutos = $array_3["Duracion_Minutos"];
        $Vuelos = $array_3["Vuelo"];
    
    if ($Vuelos == $text) {
        $EJ = $EJ + $Duracion_Minutos;
        $contador++;
        }
    }
        $EJ = $EJ/$contador;
        $EJ = $EJ/60;
        echo "La media de horas voladas es: ".$EJ." Horas"."<br>";
    }

?>