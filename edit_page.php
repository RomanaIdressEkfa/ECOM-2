<?php

include 'vendor/autoload.php';
use App\Source;

$source = new Source;
$id = $_GET['id'];
$sources = $source->edit($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_POST['id'] = $id;

  $source->update($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EDIT Student Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="m-4">

  <div class="container">
    <h1>EDIT Student</h1>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" value="<?= $sources['name'] ?>" class="form-control" id="name"
          placeholder="Enter name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" value="<?= $sources['email'] ?>" class="form-control" id="email"
          placeholder="Enter email" required>
      </div>
      <button type="submit" class="btn btn-success">Update Button</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>