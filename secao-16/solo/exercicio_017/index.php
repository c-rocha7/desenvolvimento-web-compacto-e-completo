<?php

function tarefaDemorada()
{
    $inicio = microtime(true);

    for ($i = 0; $i < 30000; ++$i) {
        sqrt($i);
    }

    $fim = microtime(true);

    $duracao = $fim - $inicio;

    return $duracao;
}

$duracao_total = tarefaDemorada();

echo 'Tarefa concluída em: '.number_format($duracao_total, 3)." segundos\n";
