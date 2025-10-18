<?php

$numbers = [1,2,3,4,5];
$fruits = array('apple', 'orange', 'banana');

print_r($numbers);
print_r($fruits);

echo '<br>';

// acceder a un valor del arreglo a traves de su indice
echo $fruits[0];

echo '<br>';

/**********************
 * Arreglos asociativos
*/

// permiten la especificacion del indice de forma personalizada
$hex = [
    'red' =>  '#f00',
    'blue' => '#00f'
];
echo $hex['red'];

echo '<br>';

/*****************************
 * Arreglos multidimensionales
*/

$people = [
    [
        'firstName' => 'Martin',
        'lastName' => 'Wilches',
        'age' => 31
    ],
    [
        'firstName' => 'Andrea',
        'lastName' => 'Sar',
        'age' => 32
    ]
];
print_r($people[0]);
echo $people[0]['age'];

echo 'br';

// convertir un array asociativo en un objeto JSON
var_dump(json_encode($people));
