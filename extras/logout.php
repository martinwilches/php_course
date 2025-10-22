<?php

session_start();

// destruir la sesion
session_destroy();
header('Location: /php_course/12._session.php');
