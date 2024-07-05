<?php
$camisa = readline("cuantas camisas compro: ");
$valorcamisa = 30000;
if($camisa>3) {
    $te = $valorcamisa * $camisa * 0.2 ;
    echo $te;

}else{
    $ye = $valorcamisa * $camisa * 0.1;
    echo $ye;
}



