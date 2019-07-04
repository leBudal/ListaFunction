<?php

print "\nDigite uma temperatura em Fahrenheit: ";
$F=(float)fgets(STDIN);

function temperatura($F){
    $C = ($F - 32) * 5/9;
    return $C;
}

$C = temperatura($F);
print "\n" . $F . " Fahrenheit equivale a " . $C . " Celsius\n\n";


?>