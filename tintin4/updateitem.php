<?php
	$connection = new mysqli('localhost','root1','','dbinventory');
	if($connection->connect_error){
		die("Connection Failed : " .$connection->connect_error);
	}
	$itemid = $_POST['itemid'];
	$itemname = $_POST['itemname'];
	$datein = $_POST['datein'];
	$stocks = $_POST['stocks'];
	$supplier = $_POST['supplier'];
	$price = $_POST['price'];
	$updateitem = "UPDATE `tlbstocks` set `ItemName` = '".$itemname."',`DateIN` = '".$datein."',`Stocks` = ".$stocks.",`Supplier`='".$supplier."',`Price`=".$price." WHERE `ItemID` = ".$itemid;
	if ($connection->query($updateitem) === TRUE) {
		header("Location:inventory.php");
	} else {
		echo "<h1>Error: " . $updateitem . "<br></h1>" . $connection->error;
	}


?>