<?php

print "\nDigite um número: ";
$n = (int) fgets(STDIN);

function diaSemana($n){
    if($n>=1 and $n<=7){
        $diaS = array("","DOM","SEG","TER","QUA","QUI","SEX","SAB");
        return $diaS[$n];
    }else{
        print "$n não corresponde a um dia da semana!\n";
    }

}

$msg = diaSemana($n);
print "$msg\n\n";