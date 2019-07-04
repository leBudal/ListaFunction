<?php

print "\nDigite uma medida em polegadas: ";
$pol=(float)fgets(STDIN);

function polegadas($pol){
    $cm = $pol*2.54;
    return $cm;
}

$cm = polegadas($pol);
print $pol . " Polegadas equivale a " . $cm . " Centímetros\n\n";


?>