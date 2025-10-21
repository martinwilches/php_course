<?php

// variables disponibles en todos los scopes

/****************
 * $_GET & $_POST
 *  Se usar para pasar datos a traves de urls y formularios
*/

// si el formulario ha sido enviado, se obtienen los datos enviados desde el formulario en name y age a traves del metodo POST
if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals</title>
</head>
<body>
    <!--<ul>
        $_SERVER // Contiene informacion sobre el ambiente del servidor
        <li>Host:               <?php echo $_SERVER['HTTP_HOST']; ?></li>
        <li>Document Root:      <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
        <li>System Root:        <?php echo $_SERVER['SystemRoot']; ?></li>
        <li>Server Name:        <?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li>Server Port:        <?php echo $_SERVER['SERVER_PORT']; ?></li>
        <li>Current File Dir:   <?php echo $_SERVER['PHP_SELF']; ?></li>
        <li>Request URI:        <?php echo $_SERVER['REQUEST_URI']; ?></li>
        <li>Server Software:    <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
        <li>Client Info:        <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
        <li>Remote Address:     <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
        <li>Remote Port:        <?php echo $_SERVER['REMOTE_PORT']; ?></li>
    </ul>-->

    <!-- al hacer clic en el boton, $_SERVER['PHP_SELF'] redirige a la ruta actual -->
    <!-- se añade un parametro a la query llamado `name` el cual podra ser accedido desde la superglobal $_GET -->
    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?name=Martin">Click me!</a>

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
