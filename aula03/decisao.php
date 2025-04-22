<?php
    
    $x = 5;
    $y = 8;
    $media = ($x + $y) / 2;
    //media >= 6 = 'aprovado'
    //media < 6 && media >= 4 = 'retido'
    //media < 4 = 'reprovado'
    //maior, ou menor ou igual?
    
    if ($x > $y) {
        // se verdadeiro
        echo $x . ' é maior que ' . $y . '<br>';
        echo "${x} é maior que ${y} <br>";
    }
    else if ($x < $y){
        //se verdadeiro
        echo $x . ' é menor que ' . $y . '<br>';
        echo "${x} é menor que ${y} <br>";
    }
    else {
        //se falso
        echo $x . ' é igual a ' . $y . "<br>";
        echo "${x} é igual a ${y}";
    }

    if ($media >= 6) {
        // se verdadeiro
       echo "Aluno aprovado <br>";
    }
    else if ($media >= 4){
        //se verdadeiro
        echo "Aluno em recuperação";
    }
    else {
        //se falso
        echo "Aluno reprovado";
    }

?>