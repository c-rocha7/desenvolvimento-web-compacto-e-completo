<?php

include 'nomes.php';

foreach ($nomes as $nome) {
    $first_letter = strtoupper(substr($nome, 0, 1));
    if ($first_letter >= 'A' && $first_letter <= 'M') {
        echo "$nome\n";
    }
}
