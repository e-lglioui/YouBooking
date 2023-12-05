<?php

include 'connection.php'; 

if(isset($_POST['adduser']))
{ 
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$num = $_POST['num'];
    $cin = $_POST['cin'];
    
    $sql = "INSERT INTO `users`(`id`, `lname`, `fname`, `email`, `password`, `num`, `cin`, `id_role`) VALUES (NULL,'$lname','$fname','$email','$password','$num','$cin',NULL)";
     var_dump($sql);
    if(mysqli_query($conn, $sql))
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: ../Pages/login.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
  
}

?>
