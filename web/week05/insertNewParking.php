<?php
$Make = $_POST['Make'];
$Model = $_POST['Model'];
$Year = $_POST['Year'];
$LicensePlate = $_POST['LicensePlate'];
$customerID = $_POST['customerID'];

require("connection.php");
$db = get_db();

try
{
	$query = 'INSERT INTO parking (Make, Model, Year, license_plate, customer_id) 
    VALUES (:Make, :Model, :Year, :LicensePlate. :customerID)';
	$statement = $db->prepare($query);
	$statement->bindValue(':Make', $Make);
	$statement->bindValue(':Model', $Model);
  $statement->bindValue(':Year', $Year);
  $statement->bindValue(':LicensePlate', $LicensePlate);
  $statement->bindValue(':customerID', $customerID);
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