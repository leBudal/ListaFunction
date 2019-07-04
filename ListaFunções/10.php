<?php

print "\nDigite um número: ";
$n1 = (int) fgets(STDIN);

print "\nDigite um número: ";
$n2 = (int) fgets(STDIN);

function maior($n1,$n2){
    if($n1>$n2){
        $msg = $n1 . " é maior que " . $n2;
    }elseif($n2>$n1){
        $msg = $n2 . " é maior que " . $n1;
    }else{
        $msg = "Números iguais";
    }
    return $msg;
}

$msg = maior($n1,$n2);
print "\n$msg\n\n";