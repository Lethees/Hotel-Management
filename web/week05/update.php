<?php
$id = $_POST['reservationID']
$RoomNumber = $_POST['RoomNumber'];
$checkInDate = $_POST['checkInDate'];
$checkOutDate = $_POST['checkOutDate'];

require("connection.php");
$db = get_db();

try
{
	$statement = $db->prepare("UPDATE reservation SET room_number = '$RoomNumber', check_in_date = '$checkInDate', check_out_date = '$checkOutDate' WHERE id= $id");
	$statement->execute();
	
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
	// $userId = $db->lastInsertId("reservation_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: search3.php");

die(); 

?>
