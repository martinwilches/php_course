<?php
$y = 10;

// la funcion recibe parametros que son variables que se pueden utilizar dentro de la funcion
// los parametros por defecto le asignan un valor al parametro cuando no se pasa ningun valor como argumento
function sum($num = 300) {
    // definir el alcance de la variable definida fuera de la funcion como global
    global $y;
    return $num + $y; // return finaliza la ejecucion de la funcion y le asigna un valor a la funcion
}

// argumentos de la funcion
$result = sum(200); // asignar el valor retornado de la variable a una variable
echo $result;


/**
 * Funciones anonimas
*/

// la funcion no tiene un nombre, se asigna directamente a una variable
$substract = fn($n1, $n2) => $n1 - $n2;
