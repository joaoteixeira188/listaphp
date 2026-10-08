<?php
$a=04;
$b=32;
$c=90;

if ($a > $b && $b > $c) {
    echo $c, ",", $a;
}
elseif($b>$a && $a>$c){
    echo $c,",", $b, "." 
;}
elseif($c>$b && $b>$a){
    echo $a,",", $c;
}
elseif($a>$c && $c>$b){
    echo $b,",", $a;
}
elseif($c>$a && $a>$b){
    echo $b,",", $c, "." 
;}
else{
    echo $a,  $b;
}
?>
