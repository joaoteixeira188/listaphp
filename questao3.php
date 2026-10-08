<?php

$a=79;
$b=11;
$c=87;

if ($a > $b && $b > $c) {
    echo $a, ",", $b, ",", $c;
}
elseif($b>$a && $a>$c){
    echo $b, ",", $a, ",", $c, "." 
;}
elseif($c>$b && $b>$a){
    echo "$c, "," $b, ","", $a;
}
elseif($a>$c && $c>$b){
    echo $a,",", $c,",", $b;
}
elseif($c>$a && $a>$b){
    echo $c, ",", $a, ",", $b, "." 
;}
else{
    echo $b, $c, $a;
}
?>


