<?php 
    $nota = 7;

     if($nota % 2 == 0){
        echo "Aprovado!";
    } else{
        echo "Reprovado";
    }
    echo "<br>";

    for ($i = 1; $i <= 5; $i++) {   
        if($nota % 2 == 0){
            $resultado = "Aprovado!";
        } else{
            $resultado = "Reprovado";
        }
        echo "Número: " . $i . " ==> " . $resultado . "<br>";
    }
?>