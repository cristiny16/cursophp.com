<?php
// Do While executa pelo menos 1 vez mesmo sendo falso

    $total = 150;
    $desconto = 0.9;


    do { //faça 10% de desconto

        $total *= $desconto;

    } while ($total > 100); //enquanto total for menor que 100

    echo $total;

?>