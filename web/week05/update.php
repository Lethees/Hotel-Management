<?php
$id = $_POST['reservationID'];
$RoomNumber = $_POST['RoomNumber'];
$checkInDate = $_POST['checkInDate'];
$checkOutDate = $_POST['checkOutDate'];

require "connection.php";
$db = get_db();

try
{
	$update = $db->prepare("UPDATE reservation SET room_number = ?, check_in_date = ?, check_out_date = ? WHERE id = ?");
	$update->execute([
		$RoomNumber,
		$checkInDate,
		$checkOutDate,
		$id,
	]);
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: search3.php");

die(); 

?>
