<?php

function inverterTexto($texto){
    $caracteres = preg_split("//u", $texto, -1, PREG_SPLIT_NO_EMPTY);

    $caracteresInvertidos = array_reverse($caracteres);
    $textoInvertido = implode("", $caracteresInvertidos);
    $quantidadeCaracteres = mb_strlen($texto);

    return [
        "texto_invertido" => $textoInvertido,
        "quantidade_caracteres" => $quantidadeCaracteres
    ];
}

$texto_usuario = "Programação em php! @2024 #ç~ã";
echo "Texto original: " . $texto_usuario . "<br>";

$resultado = inverterTexto($texto_usuario);
echo "Texto invertido: " . $resultado["texto_invertido"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["quantidade_caracteres"] . "<br>";

?>