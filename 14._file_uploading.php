<?php

if (isset($_POST['submit'])) {
    // extensiones para validar que unicamente se puedan cargar imagenes
    $allow_ext = ['png', 'jpg', 'jpeg', 'gif'];

    if (!empty($_FILES['upload']['name'])) {
        // datos del archivo a cargar
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];

        // ubicacion donde se guardara el archivo
        $target = "uploads/$file_name";

        // extraer extension del archivo
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        // validar extension
        if (in_array($file_ext, $allow_ext)) {

            // validar tamaño del archivo (max 1000000 bytes)
            if ($file_size <= 1000000) {
                // mover el archivo de la ubicacion temp a la ruta personalizada
                move_uploaded_file($file_tmp, $target);

                $message = '<p style="color: green;">File uploaded</p>';
            } else {
                $message = '<p style="color: red;">File is too large</p>';
            }
        } else {
            $message = '<p style="color: red;">Invalid file type</p>';
        }
    } else {
        $message = '<p style="color: red;">Please choose a file</p>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <!-- si se envia el formulario sin archivo, se muestra el mensaje de error personalizado -->
    <?php echo $message ?? '' ?>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        Please select a file
        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
