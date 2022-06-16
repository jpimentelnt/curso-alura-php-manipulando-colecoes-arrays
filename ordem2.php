<?php

$notas = [
    'um',
    'dois',
    'três'
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo 'Desordenadas';
var_dump($notas);

echo 'Ordenadas';
var_dump($notasOrdenadas);