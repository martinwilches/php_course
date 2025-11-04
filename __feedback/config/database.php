<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'php_dev');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// creacion de la conexion a la base de datos
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// verificar que la conexion se establezca correctamente
if ($conn->connect_error) {
    die('Connection failed ' . $conn->connect_error);
}
