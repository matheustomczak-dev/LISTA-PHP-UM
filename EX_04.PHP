<?php

function gerarSenha() {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';
    $senha = '';
    $tamanho = 5;

    for ($i = 0; $i < $tamanho; $i++) {
        $indice = rand(0, strlen($caracteres) - 1);
        $senha = $senha .$caracteres[$indice];
    }

    return $senha;
}

echo gerarSenha();