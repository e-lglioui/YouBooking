<?php
   require_once("connections.php");



    $sql = "SELECT 	id	,name	,adress	,email	,phone	,category	,nchambre	,id_user		
    FROM hotels";
    $result = $conn->query($sql);
    
   
    

?>