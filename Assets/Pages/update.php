<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="youbooking";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

    if(isset($_GET["id"]) || $_SERVER['REQUEST_METHOD'] === 'POST'){

        $id = $_GET["id"];
        $nombre = $_POST["nombre"];
        $d_date = $_POST["d_date"];
        $f_date = $_POST["f_date"];
        $id_room = $_POST["id_room"];

        // Update hotels table
        $query = "UPDATE `reservation` SET `nombre`='$nombre',`d_date`='$d_date',`f_date`='$f_date' WHERE id= $id";
        $run = mysqli_query($conn,$query);

        // Check for errors
        if(!$query){
            // Handle error
            echo "Error: " . $conn->error;
        } else {
            // Success
            header("Location: reservastionpage.php");
        }
    } else {
        header("Location: reservastionpage.php");
    }

?>