<?php

function mascararCPF($cpf) {
    
    $cpfMascarado = str_repeat("*", strlen($cpf) - 4) . substr($cpf, -4);

    return $cpfMascarado;
}

$cpf = "12345678900";

echo mascararCPF($cpf);