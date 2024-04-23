<?php

if (3 !== $argc) {
    echo "Erro! Por favor, forneça exatamente dois argumentos.\n";
    exit(1);
}

$num1 = $argv[1];
$num2 = $argv[2];

if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "Erro! Os argumentos devem ser números inteiros.\n";
    exit(1);
}

$resultado = $num1 + $num2;

echo "$num1 + $num2 = $resultado\n";
