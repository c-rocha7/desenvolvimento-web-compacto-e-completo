<?php

function readHashesFromFile($filename)
{
    $hashes = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    return $hashes;
}

function splitAndWriteOutputFiles($hashes, $output_files)
{
    $total_hashes    = count($hashes);
    $hashes_per_file = ceil($total_hashes / count($output_files));

    $start = 0;
    foreach ($output_files as $index => $output_file) {
        $chunk = array_slice($hashes, $start, $hashes_per_file);
        file_put_contents($output_file, implode(PHP_EOL, $chunk));
        $start += $hashes_per_file;
    }
}

if ($argc < 2) {
    echo "Uso: php index.php <ficheiro_entrada>\n";
    exit(1);
}

$input_file = $argv[1];

if (!file_exists($input_file)) {
    echo "O arquivo de entrada não foi encontrado.\n";
    exit(1);
}

$output_files = ['output_1.txt', 'output_2.txt', 'output_3.txt'];

$hashes = readHashesFromFile($input_file);

splitAndWriteOutputFiles($hashes, $output_files);

echo "Os dados foram divididos e escritos nos arquivos de saída.\n";
