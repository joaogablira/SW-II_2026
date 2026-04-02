<?php

   $usuarios = [
        [
            "id" => 1,
            "nome" => "JG",
            "email" => "joaogablira.gmail.com"
        ],
        [
            "id" => 2,
            "nome" => "Fulano",
            "email" => "fulano@gmail.com"
        ],
        [
            "id" => 3,
            "nome" => "Beltrano",
            "email" => "beltrano@gmail.com"
        ]
    ];

    $json = json_encode($usuarios);
    file_put_contents("usuarios.json", $json);

    $dusuarios = file_get_contents("usuarios.json");
    $jsonObj = json_decode($conteudo, true);
    

?>