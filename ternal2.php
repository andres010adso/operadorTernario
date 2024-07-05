<?php
$articulos = readline("ingrese total articulos ");
$Unitario =  readline("ingrese precio unitario ");

$total = $articulos * $Unitario;

$descuento = ($articulos >= 10 ) ? 0.10 : 0;

$totaldescuento = $total - ($total * $descuento);

echo "seria $total pesos pero con descuento seria $totaldescuento pesos a pagar";