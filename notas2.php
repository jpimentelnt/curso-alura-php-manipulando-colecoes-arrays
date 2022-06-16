<?php

$notas = [ 
   'Vinicius' => 6, 
   'João' => 8, 
   'Ana' => 10, 
   'Roberto' => 7, 
   'Maria' => 9,
];

krsort($notas);
var_dump($notas);


if(is_array ($notas)){
    echo 'Sim, é uma array';
}

var_dump(array_is_list($notas));