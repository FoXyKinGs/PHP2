<?php

include_once('../config/config.php');


if (isset($_POST['submit_insert'])) {
  $data = [
    'name' => $_POST['name'],
    'description' => $_POST['description'],
    'price' => $_POST['price'],
    'stock' => $_POST['stock']
  ];
  insert($data);
}

function getList(){
  global $conn;
  $result = [];
  $get = $conn->query("SELECT * FROM tbl_products");
  while ($row = $get->fetch_assoc()) {
    array_push($result, $row);
  }
  return $result;
}

function insert($data){
  global $conn;
  $name = $conn->real_escape_string($data['name']);
  $description = $conn->real_escape_string($data['description']);
  $price = $conn->real_escape_string($data['price']);
  $stock = $conn->real_escape_string($data['stock']);

  $insert = $conn->query("INSERT INTO tbl_products (name, description, price, stock) VALUE ('$name','$description','$price','$stock')");
  if(!$insert){
    echo "failed";
    die();
  }
  echo '<h3>Insert Data Success</h3>
        <a href="../views/index.php">Back</a>';
}

if(isset($_GET['id_delete'])){
  $id = $_GET['id_delete'];
  $delete = $conn->query("DELETE FROM tbl_products WHERE id='$id'");
  if(!$delete){
    echo "Failed to delete data";
    die();
  }
  echo '<h3>Delete Data Success</h3>
        <a href="../views/index.php">Back</a>';
}

function detail($id){
  global $conn;
  $detail = $conn->query("SELECT * FROM tbl_products WHERE id='$id'");
  return $detail->fetch_assoc();
}

function update($data, $id){
  global $conn;
  $name = $conn->real_escape_string($data['name']);
  $description = $conn->real_escape_string($data['description']);
  $price = $conn->real_escape_string($data['price']);
  $stock = $conn->real_escape_string($data['stock']);

  $update = $conn->query("UPDATE tbl_products SET name='$name', description='$description', price='$price', stock='$stock' WHERE id='$id'");

  if(!$update){
    echo "failed";
    die();
  }
  echo '
        <div class="d-flex justify-content-center"><h3>Update Data Success</h3></div>
        <div class="d-flex justify-content-center"><a href="../views/index.php" class="btn btn-secondary">Back</a></div>
       ';
}