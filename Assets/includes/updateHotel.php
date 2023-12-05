<?php
require_once("connections.php");
// Check if id_user exists in users table
$check_user_query = "SELECT id FROM users WHERE id = ?";
$check_user_stmt = $conn->prepare($check_user_query);
$check_user_stmt->bind_param("i", $id_user);
$check_user_stmt->execute();
$check_user_result = $check_user_stmt->get_result();

if($check_user_result->num_rows > 0) {
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
    
} else {
    // Handle the case where id_user does not exist in users table
    echo "Error: The user with id_user does not exist.";
}
?>