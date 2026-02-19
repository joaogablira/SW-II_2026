<?php 
    $nota1 = 8;
    $nota2 = 7;
    $nota3 = 9;

    echo "Nota 1:  $nota1<br>";
    echo "Nota 2:  $nota2<br>";
    echo "Nota 3:  $nota3<br>";
    echo "<br>";

    $media = ($nota1 + $nota2 +$nota3)/3;
    
    if($media >= 5){
            $resultado = "Aprovado!";
        } else{
            $resultado = "Reprovado";
        }
    
    echo "Média: $media ==> $resultado";
?>