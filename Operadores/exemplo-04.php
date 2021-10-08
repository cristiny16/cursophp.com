 <?php
    //OPERADORES DE COMPARAÇÃO

    $a = 55.0;
    $b = 55;

    var_dump($a > $b);
    echo "<br>";

    var_dump($a < $b);
    echo "<br>";

    var_dump($a == $b);
    echo "<br>";

    var_dump($a === $b);
    echo "<br>";

    // === : Igualdade de identidade
    // == : Igualdade de valor

    var_dump($a != $b); //diferente o valor
    echo "<br>";

    var_dump($a !== $b); //diferente o tipo
    echo "<br>";
?>