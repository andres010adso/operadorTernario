<?php
$largo = readline("Ingrese el largo del terreno en metros: ");
$ancho = readline("Ingrese el ancho del terreno en metros: ");
$areaTotal = $largo * $ancho;
$mensaje = ($areaTotal >= 1000) ? "El terreno es adecuado para cultivos extensivos." : 
"El terreno es más adecuado para cultivos de jardín o huerto.";
echo "\n";
echo $mensaje;