<?php

$contentJSON = file_get_contents("../2/usuarios.json");
$usuariosArray = json_decode($contentJSON, true);

$usuarios = $usuariosArray["usuarios"];

$nomeRemover = "dandan";

foreach ($usuariosArray["usuarios"] as $index => $usuario) {
    if ($usuario["nome"] === $nomeRemover) {
        unset($usuariosArr["usuarios"][$index]);
    }
}

$usuariosArray["usuarios"] = array_values($usuariosArray["usuarios"]);

$jsonUsuarios = json_encode($usuariosArr);

file_put_contents("usuarios.json", $jsonUsuarios);