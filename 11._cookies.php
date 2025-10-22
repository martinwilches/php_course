<?php

/*********
 * Cookies
 * - Se almacenan en el navegador.
 * - Se utilizan para identifcar al usuario cada vez que visita un sitio web, almacenando datos como el nombre, email, etc.
 * - No se almacenan datos sensibles como por ejemplo contraseñas.
*/

// establecer un cookie
setcookie('name', 'Martin', time() + 86400 * 30); // cookie que expira dentro de 30 dias

if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
} else {
    echo 'Cookie setted';
}

// remover una cookie
setcookie('name', '', time() - 86400);
