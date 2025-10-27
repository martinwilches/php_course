<?php

function inverse($x) {
    if (!$x) {
        throw new Exception('Division by 0');
    }

    return 1 / $x;
}

try {
    echo inverse(0);
} catch(Exception $ex) {
    // se captura el error pero no se detiene la ejecucion del programa
    echo 'Catch Exception ' . $ex->getMessage();
} finally {
    // el bloque finally se ejecuta siempre al finalizar el bloque try...catch
    echo 'First Finally';
}
