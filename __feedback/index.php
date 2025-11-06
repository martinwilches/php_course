<?php

include 'includes/header.php';

$name = $email = $body = '';
$nameError = $emailError = $bodyError = '';

// envio de datos del formulario
if (isset($_POST['submit'])) {
  // validar que los datos sean enviados en el formulario // en caso de ser enviados se sanitizan a traves de filter_input
  if (empty($_POST['name'])) {
    $nameError = 'Name is required';
  } else {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  if (empty($_POST['email'])) {
    $emailError = 'Email is required';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  if (empty($_POST['body'])) {
    $bodyError = 'Body is required';
  } else {
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  if (empty($nameError) && empty($emailError) && empty($bodyError)) {
    // script sql
    $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";

    // ejecucion de la consulta en base de datos y validacion de la correcta ejecucion de la misma
    if (mysqli_query($conn, $sql)) {
      // redireccion del usuario al archivo feeback.php
      header('Location: feedback.php');
    } else {
      echo 'Error ' . mysqli_error($conn);
    }
  }
}

?>

<img src="/php_course/__feedback/img/logo.png" class="w-25 mb-3" alt="">
<h2>Feedback</h2>
<p class="lead text-center">Leave feedback for Traversy Media</p>
<form action="<?php $_SERVER['PHP_SELF'] ?>" class="mt-4 w-75" method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control <?php echo $nameError ? 'is-invalid' : null ?>" name="name" placeholder="Enter your name">
    <div class="invalid-feedback">
      <?php echo $nameError; ?>
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control <?php echo $emailError ? 'is-invalid' : null?>" name="email" placeholder="Enter your email">
    <div class="invalid-feedback">
      <?php echo $emailError ?>
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Feedback</label>
    <textarea class="form-control <?php echo $bodyError ? 'is-invalid' : null ?>" name="body" placeholder="Enter your feedback"></textarea>
    <div class="invalid-feedback">
      <?php echo $bodyError ?>
    </div>
  </div>
  <div class="mb-3">
    <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
  </div>
</form>

<?php include 'includes/footer.php' ?>
