<?php

//$dados = ['Vinicius', 10, 24];

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];

['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

// list($nome, $nota, $idade) = $dados;
// [$nome, $nota, $idade] = $dados;

//extract($dados);

//var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));




//em vez de usar list(), pode usar apenas colchetes[] para facilitar. Por padrao a funçao list utiliza indices numericos. Para usar list com strings tem que informar.