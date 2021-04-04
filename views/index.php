<?php

include_once('../handlers/handlers.php');
getList();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="data mt-3">
      <h3>List</h3>
      <a href="insert.php" class="btn btn-success mt-3 mb-3">Insert New Data</a>
      <div class="card">
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Action</th>
            </tr>
            <?php 
              $no = 1;
              foreach(getList() as $value){
            ?>
              <tr>
                <th><?= $no++ ?></th>
                <th><?= $value['name'] ?></th>
                <th><?= $value['description'] ?></th>
                <th><?= $value['price'] ?></th>
                <th><?= $value['stock'] ?></th>
                <th>
                  <a href="detail.php?id=<?= $value['id']?>" class="btn btn-primary">Detail</a>
                  <a href="update.php?id_update=<?= $value['id']?>" class="btn btn-warning">Edit</a>
                  <a href="../handlers/handlers.php?id_delete=<?= $value['id'] ?>" class="btn btn-danger">Delete</a> 
                </th>
              </tr>
            <?php
              }
            ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>