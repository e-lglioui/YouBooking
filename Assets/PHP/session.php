<?php session_start(); ?>
<?php include 'connection.php' ?>
<?php

if (isset($_POST['signin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * from users WHERE email = '$email' AND password = '$password'";
  $user = mysqli_query($conn, $query);

  if (!$user) {
    die('query Failed' . mysqli_error($conn));
  }

  while ($row = mysqli_fetch_array($user)) {

    $user_id = $row['ID'];
    $user_email = $row['email'];
    $user_password = $row['password'];
  }
  if ($user_email == $email  &&  $user_password == $password) {

    $_SESSION['id'] = $user_id;   
    $_SESSION['email'] = $user_email; 
    header('location: ../../index.php');
  } else {
    header('location: ../Pages/login.php');
  }
}
?>