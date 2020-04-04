<?php
$reservation_id = $_GET['id'];
require "connection.php";
$db = get_db();
$delete = $db->prepare("DELETE FROM reservation WHERE id = $reservation_id");
$delete->execute();
die();
header("Location: results3.php"); 
?>