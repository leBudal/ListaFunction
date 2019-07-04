<?php 

print "\nDigite n1: ";
$n1 = (int) fgets(STDIN);

print "Digite n2: ";
$n2 = (int) fgets(STDIN); 

function somaIntervalo($n1, $n2){
    for($i = 1; $i <= $n2; $i++){
        $n1 = $n1+$i;        
    }
    $n1 = $n1-1;
    return $n1;
}

$msg = somaIntervalo($n1,$n2);
print "$msg\n\n";

?>