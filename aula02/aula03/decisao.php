<?php

    if(5 < 3){
        echo "Have a good day!";
    }

    
    $x = 5;
    $y = 9;
    $media = ($x + $y) / 2;
    // media > 6,0 = 'aprovado'
    // media < 6,0 && >= 4,0 
    //= 'recuperação'
    // media < 4,0 = 'reprovado'


    if ($media >= 4.0){
        // se verdade
        echo 'Aluno reprovado';
    }
    else if ($media >= 6.0){
        // se verdade
        echo 'Aluno aprovado';
    }
    else{
        // se falsa
        echo 'Aluno em recuperação';
    }


?>