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
    <h2>Insert</h2>
    <a href="index.php" class="btn btn-light mb-3">Back</a>
    <div class="card">
      <div class="card-body">
        <form action="../handlers/handlers.php" method="POST">
          <div class="form-group mb-2">
            <input type="text" name="name" class="form-control" placeholder="Name">
          </div>
          <div class="form-group mb-2">
            <textarea name="description" class="form-control" placeholder="Description" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group mb-2">
            <input type="text" name="price" class="form-control" placeholder="Price">
          </div>
          <div class="form-group mb-2">
            <input type="text" name="stock" class="form-control" placeholder="Stock">
          </div>
          <div class="form-group mb-2">
            <button type="submit" name="submit_insert" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>