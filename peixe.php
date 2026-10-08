<?php

$tamanho = 10;
$cor = "verde";
$agua = "contaminada";
$condiçao = "cego";

if($tamanho >= 10 && ($cor == "verde" || $cor == "amarelo") && ($agua == "contaminada") && $condiçao == "cego"){
    echo "seu peixe é raro!!!";
}

else{
    echo "seu peixe não é raro";
}








?>