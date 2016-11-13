<?php
	$connection = new mysqli('localhost','root1','','dbinventory');
	if($connection->connect_error){
		die("Connection Failed : " .$connection->connect_error);
	}
	$itemname = $_POST['itemname'];
	$datein = $_POST['datein'];
	$stocks = $_POST['stocks'];
	$supplier = $_POST['supplier'];
	$price = $_POST['price'];
	$newitem = "INSERT INTO `tlbstocks`(`ItemName`,`DateIN`,`Stocks`,`Supplier`,`Price`) VALUES ('".$itemname."','".$datein."',".$stocks.",'".$supplier."',".$price.")";
	if ($connection->query($newitem) === TRUE) {

		header("Location:index.php");
	} else {
		echo "<h1>Error: " . $newitem . "<br></h1>" . $connection->error;
	}


?>