<?php
    $dsn = 'mysql:host=localhost;dbname=proghub';
  $user = 'root';
  $pass = '';
  $option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
  );
  try
  {
    $con = new PDO($dsn,$user,$pass,$option);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
  }
  catch(PDOException $ex)
  {
    echo "Failed to connect with database ! ".$ex->getMessage();
    die();
  }

if (isset($_POST['action']) && $_POST['action'] === 'add_user') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
  $conn->query($sql);
}

if (isset($_POST['action']) && $_POST['action'] === 'delete_user') {
  $user_id = $_POST['user_id'];
  $sql = "DELETE FROM users WHERE id = $user_id";
  $conn->query($sql);
}
?>