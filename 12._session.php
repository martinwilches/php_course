<?php

/**
 * Sessions
 * - Almacenan informacion en variables y pueden ser utilizadas en multiples paginas}
 * - A diferencia de las cookies, session son almacenadas en el servidor
 * */

// donde se requiera usar $_SESSION, se debe tener una sesion iniciada
session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if ($username == 'martin' && $password == 'password') {
        $_SESSION['username'] = $username; // guardar en la sesion el nombre del usuario logueado
        header('Location: /php_course/extras/dashboard.php'); // rediriger a la ruta especificada
    } else {
        echo 'Incorrect Login';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizar datos de entrada</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>
