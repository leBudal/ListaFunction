<?php

function poligono($lados,$valor){

    if($lados==3){
        $perimetro = $valor*3;
        $msg = "Triângulo, " . $perimetro . " cm\n";
    }elseif($lados==4){
        $area = ($valor*2);
        $msg = "Quadrado, " . $area . " cm\n";
    }else{
        $msg = "Pentágono\n";
    }
    return $msg;
}


print "\nQuantos lados? ";
$lados = (int) fgets(STDIN);

print "Valor do lado (cm): ";
$valor = (float) fgets(STDIN);

$msg = poligono($lados,$valor);
print ($msg);