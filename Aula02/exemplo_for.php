<?php
    for ($i=1; $i <= 10; $i++) { 
        echo $i . "<br>";
    }
    echo "<hr>";
    echo "<br>";

    $nomes = ['FULANO', 'CICLANO', 'BELTRANO','ANDERSON'];
    // echo $nomes[0] . "<br>";
    // echo $nomes[1] . "<br>";
    // echo $nomes[2] . "<br>";

    /*     $qtde = count($nomes);
    echo $qtde;
    echo "<br><hr>";
    for ($i=0; $i < $qtde; $i++) { 
        echo $nomes[$i];
        echo "<br>";
    }*/
    echo "<hr>"; 

    
    foreach ($nomes as $indice => $value) {
        echo $indice . "===> " . $value;
        echo "<br>";
    }
?>