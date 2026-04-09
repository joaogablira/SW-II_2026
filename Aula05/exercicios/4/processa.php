<?php


$emailFiltro = $_POST['email'];

$contentJSON = file_get_contents("../2/usuarios.json");

$usuariosArray = json_decode($contentJSON, true);

$usuarios = $usuariosArray["usuarios"];

$usuarioEncontrado = null;

foreach ($usuarios as $usuario) {
    if ($usuario["email"] === $emailFiltro) {
        $usuarioEncontrado = $usuario;
        break;
    }
}

if ($usuarioEncontrado) {
    foreach ($usuarioEncontrado as $key => $value) {
        echo "$key: $value <br/>";
    }
} else {
    echo "Usuario nao encontrado no sistema!";
}


