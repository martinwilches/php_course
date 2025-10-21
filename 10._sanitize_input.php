<?php

// si el formulario ha sido enviado, se obtienen los datos enviados desde el formulario en name y age a traves del metodo POST
if (isset($_POST['submit'])) {
    // sanitizar las entradas en el formulario convirtiendo los caracteres especiales en entidades HTML
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name;
    echo $age;
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
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="text" name="age">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
