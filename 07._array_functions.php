<?php

$fruits = ['apple', 'orange', 'banana'];

// longitud del arreglo
// echo count($fruits);

// buscar un valor especifico dentro de un arreglo
// var_dump(in_array('apple', $fruits));

// añadir un valor al final del arreglo
$fruits[] = 'pinneapple';
array_push($fruits, 'strawberry');

// añadir un valor al inicio del arreglo
array_unshift($fruits, 'passion fruit');

// remover un elemento ubicado en una posicion especifica
unset($fruits[0]);

// dividir un arreglo en grupos
// se divide en grupos de 3 valores [[1,2,3], [1,2,3], n]
$chunked_array = array_chunk($fruits, 3);

// print_r($chunked_array);
// print_r($fruits);

// unir el contenido de 2 o mas arreglos
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);

// propagar un arreglo dentro de otro
$arr4 = [...$arr1];

// print_r($arr3);
// print_r($arr4);

// combinar el contenido de 2 arreglos
$colors = ['yellow', 'green'];
$food = ['banana', 'avocado'];

// ambos arreglos a combinar deben contener la misma cantidad de valores
// array_combine($keys, $values)
$combined_array = array_combine($colors, $food);
// print_r($combined_array);

// intercambia los valores por llaves y las llaves por los valores del arreglo previamente combinado
$flipped_array = array_flip($combined_array);
// print_r($flip_array);

// generar un arreglo a partir de un rango de numeros
$numbers = range(1, 20);

/**
 * mapear el contenido de un arreglo para generar un nuevo arreglo
*/
$string_numbers = array_map(function($number) {
    return "Number - $number";
}, $numbers);
// print_r($string_numbers);

/**
 * filtrar un arreglo
*/

// filtrar los elementos que cumplan con la condicion especificada
$filter_array = array_filter($numbers, fn($number) => $number <= 10);
// print_r($filter_array);

/**
 * reducir el contenido de un arreglo a un unico valor
*/

$sum_numbers = array_reduce($filter_array, fn($a, $b) => $a + $b, 0);
var_dump($sum_numbers);
