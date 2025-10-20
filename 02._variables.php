<?php

/*
    - String            Cadena de caracteres
    - Integer           Numeros enteros
    - Float             Numeros decimales
    - Boolean           Verdadero o falso
    - Array             Variable que puede contener multiples valores
    - Object            Clases
    - NULL              Variables sin valor
    - Resource          Variable que contiene un recurso
*/

// las variables inician con el simbolo `$`
$name = 'Martin';
// echo $name;

// interpolar una variable dentro de un string (el string debe envolverse entre comillas dobles)
// echo "My name is $name";

/************
 * Constantes
*/

// el valor de una constante no puede ser reasignado
define('HOST', 'localhost');
echo HOST;
