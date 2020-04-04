<?php
$reservation_id = $_GET['id'];
require "connection.php";
$db = get_db();
try{
    $delete = $db->prepare("DELETE FROM reservation WHERE id = $reservation_id");
    $delete->execute();
}
catch (Exception $ex){
    echo "Error with DB. Details: $ex";
	die();  
}
header("Location: results3.php");
 
die();
?>