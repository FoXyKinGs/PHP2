<?php 

  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'db_toko';

  $conn = new mysqli($host, $user, $password, $db);

  if($conn->connect_error){
    echo "Koneksi database gagal : ".$conn->connect_error;
    die();
  }