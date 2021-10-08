<?php

$nome = "Suellen";

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){
    $nome = "joão";
  echo $nome."agora no texte 2";
}

teste();
teste2();

?>