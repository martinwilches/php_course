<?php

$string = 'hello world';

// longitud del string
// echo strlen($string);

// indice de la primera aparicion de un caracter dentro de un string
// echo strpos($string, 'o');

// indice de la ultima aparicion de un caracter dentro de un string
// echo strrpos($string, 'o');

// reversar un string
// echo strrev($string);

// convertir todos los caracteres a minuscula
// echo strtolower($string);

// convertir todos los caracteres a mayusculas
// echo strtoupper($string);

// capitalizar todas las palabras de un string
// echo ucwords($string);

// reemplazar una palabra por otro
// echo str_replace('world', 'moon', $string);

// retornar la porcion de un string
// echo substr($string, 0, 5); // [offset, length]

// validar si empieza con
// echo str_starts_with($string, 'hello');

// validar si finaliza con
// echo str_ends_with($string, 'world');

// convertir caracteres especiales a entidades html
$string2 = '<script>alert(1)</script>';
echo htmlspecialchars($string2);
