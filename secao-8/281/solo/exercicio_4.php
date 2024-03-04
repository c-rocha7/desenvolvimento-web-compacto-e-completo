<?php

    /* 
    Dada a coleção de nomes, devem ser todos apresentados,
    mas a partir de maria (inclusive) devem ser com texto a vermelho
    */

    $nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .vermelho {
                color: red;
            }
        </style>
    </head>
    <body>
        
        <?php for($index = 0; $index < count($nomes); $index++): ?>
            <p class="<?= $index >= 4 ? 'vermelho' : ''; ?>">
                <?= $nomes[$index] ?>
            </p>
        <?php endfor; ?>
        
    </body>
</html>
