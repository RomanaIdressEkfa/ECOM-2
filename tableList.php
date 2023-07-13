<?php

include 'vendor/autoload.php';
use App\Source;

$source = new Source;
$sources = $source->read();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Table Example</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

  <div class="container">
    <h1 class="text-center m-4"><u>Student List</u></h1>
    <a class="btn btn-sm btn-success p-2 " href="create_page.php">Create New Student</a>
    <br><br><br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID NO</th>
          <th>NAME</th>
          <th>EMAIL</th>
          <th>BUTTON</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1 ?>
        <?php foreach ($sources as $source): ?>
          <tr>
            <td>
              <?= $i++ ?>
            </td>
            <td>
              <?= $source['name'] ?>
            </td>
            <td>
              <?= $source['email'] ?>
            </td>
            <td>
              <a class="btn btn-sm btn-success" href="">SHOW</a>
              <a class="btn btn-sm btn-warning" href="edit_page.php?id=<?= $source['name'], $source['email'] ?>">EDIT</a>
              <a class="btn btn-sm btn-danger" href="">DELETE</a>

            </td>
          </tr>

        <?php endforeach; ?>



      </tbody>
    </table>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>