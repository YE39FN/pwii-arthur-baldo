<?php

    $x= 5;
    $y = 9;
    $media = ($x + $y) / 2;
    //media >= 6,0 = 'aprovado'
    //media < 6,0 && >= 4,0
    //media = 'recuperação'
    //media < 4,0 = 'reprovado'

    if (6 == 5){
        echo "igual";
    } else if (6 > 5){
        echo "maior";
    } else {
        echo "menor";
    }

    if($media >= 6.0){
        echo "Aprovado";
        die;
    }
        
    
    if($media < 4.0) {
        echo "Reprovado";
        die;
    } 
    
    echo "Recuperação";
?>    