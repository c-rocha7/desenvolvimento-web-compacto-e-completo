<?php

    /*
        Ordena por ordem alfabética os produtos do array e apresenta
        os dados numa ul
    */

    $produtos = ['laranja', 'arroz', 'batata', 'feijão', 'castanha'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 3</title>
    </head>
    <body>
        <h1>Exercício 3</h1>
        <ul>
            <?php
                sort($produtos);
                foreach ($produtos as $produto) {
                    echo '<li>'. $produto. '</li>';
                }
            ?>
        </ul>
    </body>
</html>
