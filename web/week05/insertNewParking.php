<?php
$customerID = $_POST['customerID'];
$make = $_POST['make'];
$model = $_POST['model'];
$year = $_POST['year'];
$license_plate = $_POST['license_plate'];

require("connection.php");
$db = get_db();

try
{
	$query = 'INSERT INTO parking (make, model, year, license_plate, customer_id) 
	VALUES (:make, :model, :year, :license_plate, :customer_id)';
	$statement = $db->prepare($query);
	$statement->bindValue(':make', $make);
	$statement->bindValue(':model', $model);
  $statement->bindValue(':year', $year);
  $statement->bindValue(':license_plate', $license_plate);
  $statement->bindValue(':customer_id', $customerID);
	$statement->execute();
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
	// $userId = $db->lastInsertId("w6_user_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: management.php");

die(); 

?>