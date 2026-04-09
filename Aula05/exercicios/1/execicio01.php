<?php

$produto = [
    "nome"=>"suco",
    "preco"=>6,
    "qntd"=>10
]  ;
  
$jsonProduto = json_encode($produto);

file_put_contents("produtos.json", $jsonProduto)
?>