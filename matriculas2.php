<?php

$alunos2021 = [
    0 => 'Vinicius',
    1 => 'João',
    2 => 'Ana',
    3 => 'Roberto',
    4 => 'Maria',
];

$novosAlunos = [
    5 => 'Patricia',
    6 => 'Nico',
    7 => 'Kilderson',
    8 => 'Daiane',
];

$alunos2022 = $alunos2021 + $novosAlunos;

var_dump($alunos2022);

// sem a numeração, apenas com as strings, o uso do '+' iria ignorar a união, mostrando apenas os dados da array inicial. Porém, caso sejam adicionados novos arrays nas arrays secundárias, além do número de chaves da array originárias, elas serão adicionadas