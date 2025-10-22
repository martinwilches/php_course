<?php

// Donde se use $_SESSION se debe tener una sesion iniciada
session_start();

if (isset($_SESSION['username'])) {
    echo 'Hello ' . $_SESSION['username'] . ', welcome!';
    echo '<a href="logout.php">Logout</a>';
} else {
    header('Location: /php_course/12._session.php');
}

