<?php
require_once("connections.php");
    if (isset($_POST["submit"]) && isset($_GET["id"])) {
       
        $id = $_GET["id"];
        $id_user = $_POST["id"];
        $lname = $_POST["lname"];
        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $num = $_POST["num"];
        $cin = $_POST["cin"];
        $id_role = ($_POST["id_role"] === "admin") ? 1 : 
        (($_POST["id_role"] === "proprietaire") ? 2 : 3);
        $sql = "UPDATE users SET id = ? , lname = ? , fname = ? , email = ? ,password = ? , num = ?, cin = ?, id_role = ? where id = ? ";
        $update_stm = $conn->prepare($sql);
        $update_stm->bind_param("issssisii", $id_user ,  $lname , $fname , $email ,$password , $num, $cin, $id_role, $id);
        $update_resul = $update_stm->execute();
        
    
        if(!$update_resul){
            // Handle error
            echo "Error: " . $conn->error;
        } else {
            // Success
            header("Location: ../pages/admin/pageHomeAdmin");
        }
    } else {
      die();
    }
    
?>