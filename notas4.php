<?php

$notas = [ 
   'Vinicius' => null, 
   'João' => 8, 
   'Ana' => 10, 
   'Roberto' => 7, 
   'Maria' => 9,
];

krsort($notas);
var_dump($notas);


if(is_array ($notas)){
    echo 'Sim, é uma array' . PHP_EOL;
}

var_dump(array_is_list($notas));


echo "Vinicius fez a prova" . PHP_EOL;

var_dump(isset($notas ['Ana']));

echo 'Alguem tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));


echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas);


//array_key_exists = verifica se a chave existe;
// in_array = verifica se o valor existe;
// insset = verifica se a chave exite e nao é nula