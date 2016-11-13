<?php
$connection = new mysqli('localhost','root1','','dbinventory');
	if($connection->connect_error){
		die("Connection Failed : " .$connection->connect_error);
	}
?>