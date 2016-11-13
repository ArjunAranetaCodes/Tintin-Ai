<?php
session_start();
$servername = "localhost";
$username = "root1";
$password = "";
$dbname = "db_tintin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, chosen_website FROM tbl_website";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {        
		if ($row["chosen_website"] == "1"){
			header( "Refresh:4; url=../tintin1/index.php", true, 303);
			$_SESSION["chosen_website"] = "1";
		}elseif ($row["chosen_website"] == "2"){	
			header( "Refresh:4; url=../tintin2/index.php", true, 303);
			$_SESSION["chosen_website"] = "2";
		}elseif ($row["chosen_website"] == "3"){	
			header( "Refresh:4; url=../tintin3/index.php", true, 303);
			$_SESSION["chosen_website"] = "3";
		}elseif ($row["chosen_website"] == "4"){	
			header( "Refresh:4; url=../tintin4/index.php", true, 303);
			$_SESSION["chosen_website"] = "4";
		}
    }
} else {
    echo "0 results";
}
$conn->close();
?>
