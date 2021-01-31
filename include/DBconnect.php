<?php
$servername = "127.0.0.1:4433";
$username = "root";
$password = " ";
$db_name = "107find_job";



  try {
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=127.0.0.1;dbname=107find_job", $username, $password);
    $conn -> exec("set names utf8");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  }

  catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
  }




?>
