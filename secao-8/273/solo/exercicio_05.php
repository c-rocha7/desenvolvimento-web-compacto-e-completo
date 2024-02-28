<?php

    /*
        Uma empresa tem várias lojas, cada uma com um endereço de email.
        A variável $cidade indica que dados de email deverão ser apresentados.
        Constrói a lógica condicional e de apresentação do email correspondente
        quando é alterado o valor da cidade escolhida.
    */

    $lojas = [
        'lisboa' => 'lisboa@gmail.com',
        'porto' => 'porto@gmail.com',
        'coimbra' => 'coimbra@gmail.com'
    ];

    $cidade = 'lisboa';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 5</title>
    </head>
    <body>
        <?php foreach ($lojas as $key => $value): ?>
            <?php if ($cidade === $key): ?>
                <h3><?= $key ?></h3>
                <p><?= $value ?></p>
            <?php else: ?>
                <p>Não existe nenhuma loja na cidade indicada.</p>
            <?php endif; ?>
        <?php endforeach; ?>
    </body>
</html>
