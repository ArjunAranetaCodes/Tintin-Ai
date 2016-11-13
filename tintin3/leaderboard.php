<link rel="stylesheet" href="bootstrap.css" />

<style type="text/css">
	body{
		background-color:#faa650;
	}
	
	#wrapper{
		margin:0px auto;
		width:1000px;
		height:500px;
		text-align:center;
		margin-top:30px;
	}
	
	.table{
		margin-top:30px;
		background-color:white;
		font-family:Segoe UI;
		font-size:16px;
	}
	
	.table th{
		background-color:#a85c0e;
		color:white;
	}
	
	.home{
		color:white;
		font-size:20px;
	}
</style>
<?php
$servername = "localhost";
$username = "root1";
$password = "";
$dbname = "db_tests";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, points FROM tbl_scores WHERE points > 0 ORDER BY points DESC ";
$result = $conn->query($sql);

echo "<div id='wrapper'>";
	echo '<a href="index.php" class="home">Home</a>';
	if ($result->num_rows > 0) {
		echo "<table class='table'><tr><th>ID</th><th>Username</th><th>Points</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["points"]."</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
	$conn->close();

echo "</div>";
?>