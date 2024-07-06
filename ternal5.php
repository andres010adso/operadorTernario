<?php
$mes = readline("Ingrese el mes actual (ejemplo: enero, febrero, etc.): ");
$metodoSiembra = ($mes == 'abril' || $mes == 'mayo' || $mes == 'junio' || $mes == 'julio' || $mes == 'agosto' || $mes == 'septiembre' || $mes == 'octubre' || $mes == 'noviembre') 
    ? 'Se debe usar la siembra en almácigo.' 
    : 'Se puede realizar la siembra directa.';

echo "Para el mes de " . $mes . ": " . $metodoSiembra . "\n";
?>