<?php
$tele=1;
$mora=1;
$traba=1;
$devia=1;
$local=1;
$suspeita=$tele + $mora + $traba + $devia + $local;
if($suspeita<2){echo"inocente";}
elseif($suspeita==2){echo"suspeito";}
elseif($suspeita== 3 or $suspeita== 4){echo "cumplice";}
elseif($suspeita== 5){echo "assassino";}






?>