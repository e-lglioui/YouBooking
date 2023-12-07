<?php
require_once("connections.php");
if(isset($_GET["id"]) || $_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $id = $_GET["id"];
    $id_Hotel = $_POST["id_hotel"];
    $name = $_POST["name"];
    $adress = $_POST["adress"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $category = $_POST["category"];
    $nchambre = $_POST["nchambre"];
    $id_user = $_POST["id_user"];

    // Update hotels table
    $update_query = "UPDATE hotels SET id = ?, name = ?, adress = ?, email = ?, phone = ?, category = ?, nchambre = ?, id_user = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bind_param("isssssiii", $id_Hotel, $name, $adress, $email, $phone, $category, $nchambre, $id_user, $id);
    $update_result = $update_stmt->execute();

    // Check for errors
    if(!$update_result){
        // Handle error
        echo "Error: " . $conn->error;
    } else {
        // Success
        header("Location: ../pages/admin/pageHomeAdmin");
    }
} else {
    header("Location: ../pages/admin/pageHomeAdmin");
}

?>