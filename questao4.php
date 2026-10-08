<?php
$s = 680; 

if ($s <= 280) { 
    $p = $s*0.20;
    $sf = $s + $p;
    echo "
    salário anterior: $s
    percentual aplicado: 20%
    valor de aumento:$p  
    piuytresalário novo: $sf";}
elseif($s>280 and $s<=700){
    $p=$s*0.15;
    $sf=$s+$p;
    echo "
    salário anterior: $s
    percentual aplicado: 15%
    valor de aumento:$p  
    salário novo: $sf";}
?>