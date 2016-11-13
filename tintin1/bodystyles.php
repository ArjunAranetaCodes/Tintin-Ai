<?php
//$wrapperBGColor = "#000000";


echo '
	#wrapper{
		background-color:'.$bgColor.';
	}



';

?>
<?php
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

$sql = "SELECT id, css_selector, css_property, css_value FROM tbl_basicprop";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {        
		echo $row["css_selector"].'{'.$row["css_property"].':'.$row["css_value"].';}';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
