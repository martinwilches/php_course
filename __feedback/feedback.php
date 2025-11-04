<?php

include 'includes/header.php';

// realizar consulta a la base de datos
$sql = 'SELECT * FROM feedback';
// ejecutar la consulta en la base de datos
$result = mysqli_query($conn, $sql);
// obtener los resultados de la consulta en un arreglo asociativo
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<h2>Feedback</h2>

<?php if (empty($feedback)): ?>
  <div class="lead mt-3">There is not feedback</div>
<?php endif; ?>

<?php foreach($feedback as $item): ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body']; ?>
      <div class="text-secondary mt-2">
        By <?php echo $item['name']; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php include 'includes/footer.php' ?>
