<?php
$peso=60;
$altura=1.78;
$imc= $peso/($altura*$altura);
if($imc<18.5){
print("abaixo do peso");
}
elseif($imc>18.5 && $imc<=25){
print("peso normal");
}
else{
    print("acima do peso");
}





















?>