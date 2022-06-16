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



$alunos2022 = [...$alunos2021, 'Carlos Vinício', 'João Pimentel',...$novosAlunos];
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
$alunos2022[] = 'Luiz';

array_unshift($alunos2022, 'Stephane', 'Rafaela');

var_dump($alunos2022);


//'...', denominado de operador de unpacking desempacota as arrays (tira as chaves), ele tem o mesmo comportamento que o array_merge, com a diferença que se pode adicionar novos elementos;
//para outras funções ele serve para mesma coisa so que com o nome de spred operator, mas precisam ser do mesmo tipo, seja int, array, strings, etc..
