<?php

$age = 18;

// si la condicion es true, se ejecuta el bloque if
if ($age >= 18) {
    echo 'You\'re an adult';
}

// si la condicion es false, se ejecuta el bloque else
if ($age > 80) {
    echo 'You\'re an elder';
} else {
    echo 'Still young';
}

echo '<br>';

/*******************
 * Operador ternario
*/

$posts = ['First post'];

// permite especificar condiciones if...else en una sola linea
echo !empty($posts) ? $posts[0] : 'No posts';

echo '<br>';

// operador de coalescencia // si el valor de la izquierda es invalido o no existe, se asigna por defecto el valor de la derecha
$firstPost = $posts[0] ?? null;
echo $firstPost;
