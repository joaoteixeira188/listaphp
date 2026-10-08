<?php
$lado1=3;
$lado2=3;
$lado3=3;

if($lado1==$lado2 and $lado2==$lado3){echo "equilatero";}
elseif($lado1==$lado2 and $lado2!==$lado3){echo "isosceles";}
elseif($lado2==$lado3 and $lado2!==$lado1){echo "isosceles";}
else{echo "escaleno";}

?>
