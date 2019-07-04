<?php

print "\nDigite o número x: ";
$x = (int) fgets(STDIN);

print "\nDigite o número y: ";
$y = (int) fgets(STDIN);

function divisivel($x,$y){
    if($x%$y==0){
        $msg = "1";
    }else{
        $msg = "0";
    }
    return $msg;
}

$msg = divisivel($x,$y);
print "\n$msg\n\n";