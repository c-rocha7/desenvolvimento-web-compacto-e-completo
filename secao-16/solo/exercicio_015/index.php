<?php

if ($argc < 2) {
    echo "Erro! Nenhum argumento fornecido.\n";
    exit(1);
}

if ('run' === $argv[1]) {
    echo "Sucesso!\n";
} else {
    echo "Erro!\n";
}
