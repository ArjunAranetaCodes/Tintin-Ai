<?php


$p = $_GET['q'];
$data = new data();
$data->$p;
class data{
	function additem(){
	$itemname = $_POST['itemname'];
	$datein = $_POST['datein'];
	$stocks = $_POST['stocks'];
	$supplier = $_POST['supplier'];
	$price = $_POST['price'];
	$newitem = "INSERT INTO `tlbstocks`(`ItemName`, `DateIN`, `Stocks`, `Supplier`, `Price`) VALUES ($itemname,$datein,$stocks,$supplier,$price)";
	if ($connection->query($newitem) === TRUE) {
		echo "<h1>STOCK ADDED SUCCESSFULLY</h1>";
		header("Location:index.php");
	} else {
		echo "<h1>Error: " . $newitem . "<br></h1>" . $connection->error;
	}
	
	
}


