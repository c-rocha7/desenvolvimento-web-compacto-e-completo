<?php

$time_start = microtime(true);

for($i = 0; $i < 30000; $i++){
	echo $i . PHP_EOL;
}

$time_end = microtime(true);

$time = $time_end - $time_start;
$time = round($time, 3, PHP_ROUND_HALF_UP);

echo "Tarefa concluída em $time segundos." . PHP_EOL;
