<?php

    /* 
    Constrói uma apresentação em HTML que mostra a tabuada dos 5.
    Exemplo:
    5 x 1 = 5
    5 x 2 = 10
    5 x 3 = 15
    ...
    5 x 10 = 50
    */
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php for ($i = 1; $i <= 10; $i++): ?>
        <p>5 x <?= $i ?> = <?= 5 * $i ?></p>
    <?php endfor; ?>

</body>
</html>
