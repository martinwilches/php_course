<?php

// Leer y escribir archivos en el servidor

$file = 'extras/users.txt';

// si valida si el archivo existe en la ubicacion
if (file_exists($file)) {
    // echo readfile($file); // se lee el contenido del archivo // se muestra ademas el tamaño del mismo

    $handle = fopen($file, 'r'); // abrir el archivo
    $contents = fread($handle, filesize($file)); // leer el contenido del archivo
    fclose($handle); // cerrar el archivo
    echo $contents; // imprimir por pantalla el contenido del archivo
} else {
    $handle = fopen($file, 'w'); // crear el archivo
    $contents = 'Martin' . PHP_EOL . 'Andrea'; // definir el contenido del archivo
    fwrite($handle, $contents); // escribir el contenido en el archivo creado previamente
    fclose($handle); // cerrar el archivo
}
