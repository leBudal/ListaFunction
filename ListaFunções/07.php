<?php

print "\nDigite um número: ";
$n = (int) fgets(STDIN);

function mes($n){
    if($n>=1 and $n<=12){
        $mes = array("","Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
        return $mes[$n];
    }else{
        print "$n não corresponde a um mês!\n";
    }

}

$msg = mes($n);
print "$msg\n\n";