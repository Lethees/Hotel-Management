<?php
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$phone = $_POST['phone'];
$validId = $_POST['validId'];

require("connection.php");
$db = get_db();

try
{
	$query = 'INSERT INTO customer (first_name, last_name, phone, valid_id) VALUES (:first, :last, :phone, :validId)';
	$statement = $db->prepare($query);
	$statement->bindValue(':first', $FirstName);
	$statement->bindValue(':last', $LastName);
  $statement->bindValue(':phone', $phone);
  $statement->bindValue(':validId', $validId);
	$statement->execute();
	
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
	// $userId = $db->lastInsertId("customer_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: management.php");

die(); 

?>