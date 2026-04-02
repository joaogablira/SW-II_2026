<?php

   $produtos = [
        [
            "produto" => "Garrafa",
            "preco" => 2,
            "quantidade" => 20
        ],
        [
            "produto" => "Refrigerante",
            "preco" => 6,
            "quantidade" => 40
        ],
        [
            "produto" => "Suco",
            "preco" => 4,
            "quantidade" => 30
        ]
    ];

    $json = json_encode($produtos);
    file_put_contents("produtos.json", $json);

?>