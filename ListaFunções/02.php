<?php

function hipotenusa($a,$b){
    $hip = sqrt(($a**2)+($b**2));
    return $hip;
}

print "\nDigite o valor de a: ";
$a = (int) fgets(STDIN);

print "\nDigite o valor de b: ";
$b = (int) fgets(STDIN);

$hip = hipotenusa($a,$b);

print "\nA hipotenusa é: $hip\n\n";

?>

