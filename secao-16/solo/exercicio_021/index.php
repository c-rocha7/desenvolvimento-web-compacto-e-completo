<?php

if (2 !== $argc) {
    echo "Erro! Por favor, forneça exatamente um argumento.\n";
    exit;
}

$num = $argv[1];

if (!is_numeric($num)) {
    echo "Erro! O argumento deve ser um número inteiro.\n";
    exit;
}

for ($i = 1; $i <= 10; ++$i) {
    echo "$num x $i = ".$num * $i."\n";
}
