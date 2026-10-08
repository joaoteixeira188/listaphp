<?php

$a=67;
$b=88;
$c=22;


if ($a > $b && $b > $c) {
    echo $c, ",", $b, ",", $a;
}
elseif($b>$a && $a>$c){
    echo $c, ",", $a, ",", $b, "." 
;}
elseif($c>$b && $b>$a){
    echo "$a, "," $b, ","", $c;
}
elseif($a>$c && $c>$b){
    echo $b,",", $c,",", $a;
}
elseif($c>$a && $a>$b){
    echo $b,  $a,  $c;
}
else{
    echo $a, $c, $b;
}
?>


