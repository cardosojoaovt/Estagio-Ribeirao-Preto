<?php
    //DESAFIO 5  Escreva um programa que inverta os caracteres de um string.
function inverter_string($str) {
    $str_invertida = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $str_invertida .= $str[$i];
    }
    return $str_invertida;
    }
        $str = "Hello World !";
    echo inverter_string($str);
?>