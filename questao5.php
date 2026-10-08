<?php

$salario=2500;
if($salario <=900){
    $porcent=0;
}
elseif($salario >900 && $salario<1500){
    $porcent=5;
}
elseif($salario >=1500 && $salario <2500){
    $porcent=10;
}
elseif($salario >=2500){
    $porcent=20;
}
echo $salario - $salario * ($porcent/ 100)
?>