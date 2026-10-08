<?php 
$parcial1 =0; 
$parcial2 =0; 
$media = ($parcial1 + $parcial2) / 2; 

if ($media >= 9) {
    $nota = "A";
} elseif ($media >= 7.5 && $media < 9) {
    $nota = "B";
} elseif ($media >= 6 && $media < 7.5) {
    $nota = "C";
} elseif ($media >= 4 && $media < 6) {
    $nota = "D";
} elseif ($media >= 0 && $media < 4) {
    $nota = "E";
} else {
    echo "ta fazendo enem?";
}

if ($media >= 6) {
    echo "aprovado com média $media";
} else {
    echo "reprovado com média $media";
} 
?>
