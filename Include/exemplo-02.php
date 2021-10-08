<?php

    /* include "exemplo-01.php"; --- o include tenta funcionar 
    mesmo que esteja com algum problema ou o arquivo não exista. 
    o require logo exibe um erro fatal*/

    require_once "exemplo-01.php";
    require_once "exemplo-01.php"; //Ignora a segunda chamada, porque a primeira já foi feita

    $resultado = somar(10, 25);
    echo $resultado;

?>