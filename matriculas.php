<?php

$alunos2021 = ['Vinicius', 'João', 'Ana', 'Roberto', 'Maria',];

$novosAlunos = ['Patricia', 'Nico', 'Kilderson', 'Daiane',];

$alunos2022 = array_merge($alunos2021, $novosAlunos);

var_dump($alunos2022);

//no array_merge ele une as arrays sem desconsiderar os valores de cada array. Mais recomendado.