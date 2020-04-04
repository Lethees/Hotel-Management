<?php
$id = $_POST['reservationID'];
$RoomNumber = $_POST['RoomNumber'];
$checkInDate = $_POST['checkInDate'];
$checkOutDate = $_POST['checkOutDate'];

require "connection.php";
$db = get_db();

try
{
	$update = $db->prepare("UPDATE reservation SET room_number = '$RoomNumber', check_in_date = '$checkInDate', check_out_date = '$checkOutDate' WHERE id = $id");
	$update->execute();
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: search3.php");

die(); 

?>
