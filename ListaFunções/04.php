<?php

function pesoIdeal($altura,$sexo){
    if($sexo==2){
        $peso = (72.7 * $altura)-58;
    }elseif($sexo==1){
        $peso = (62.1 * $altura)-58;
    }
    return $peso;
}

print "\n1 --- Feminino\n";
print "\n2 --- Masculino\n";

print "\nQual seu sexo? ";
$sexo = (float) fgets(STDIN);

print "\nDigite sua altura: ";
$altura = (float) fgets(STDIN);

$peso = pesoIdeal($altura,$sexo);
print "\n$peso Kg\n\n";