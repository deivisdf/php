<?php

$carros = array('Corolla' => 280.00 ,
                 'Monza' => 550.00,
                 'Ferrari'=> 300.00);

print_r($carros['Corolla']);



$pessoas = array();

array_push($pessoas, array(
    'nome'=> 'Jão',
    'idade'=>45
));


array_push($pessoas, array(
    'nome'=> 'Pri',
    'idade'=>54
));


print_r($pessoas[0]['nome']);