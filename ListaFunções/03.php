<?php

function media($n1, $n2){
    $media=($n1+$n2)/2;
    if($media>=6){
        $msg = "Parabéns você foi aprovado, $media\n";
    }else{
        $msg = "Você ficou em exame, $media\n";
    }
    return $msg;
}

print "Digite a primeira nota: ";
$n1 = (float) fgets(STDIN);

print "Digite a segunda nota: ";
$n2 = (float) fgets(STDIN);

$media = media($n1,$n2);
print "$media\n\n";

?>