<?php
	$connection = new mysqli('localhost','root1','','dbinventory');
	if($connection->connect_error){
		die("Connection Failed : " .$connection->connect_error);
	}
	$itemid = $_GET['itemid'];
	$deleteitem = "DELETE FROM `tlbstocks` WHERE `ItemID` = ".$itemid;
	if ($connection->query($deleteitem) === TRUE) {
		header("Location:index.php");
	} else {
		echo "<h1>Error: " . $deleteitem . "<br></h1>" . $connection->error;
	}


?>