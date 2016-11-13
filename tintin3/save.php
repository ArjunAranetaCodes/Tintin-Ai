<link rel="stylesheet" href="bootstrap.css" />
<style type="text/css">
	#wrapper{
		margin:0px auto;
		width:900px;
		height:600px;
	}
		
	body{
		background-color:#fab977;
	}
	
	.hero-unit{
		background-color:white;
		margin-top:50px;
	}
</style>

<?php
	session_start();
	
	//echo $_GET["user"];
	//echo $_GET["points"];
	
	$servername = "localhost";
	$username = "root1";
	$password = "";
	$dbname = "db_tests";
	
	echo '<div id="wrapper">';
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO tbl_scores (username, points)
		VALUES ('$_GET[user]', '$_GET[points]')";
		// use exec() because no results are returned
		$conn->exec($sql);
		echo "<div class='hero-unit'>";
			if($_GET["points"] > 0){
				echo "<h2>Congratulations!</h2> <br />";
			}else{
				echo "<h2>Sorry</h2> <br />";
			}
			
		echo "Hello ".$_GET["user"].", your score is ".$_GET["points"];
		}
	catch(PDOException $e)
		{
		echo $sql . "<br>" . $e->getMessage();
		}

	$conn = null;
	
	$_SESSION["user"] = null;
	
	echo '<p><a href="index.php">OK</a></p>';
	echo '</div>';
	echo '</div>';
?>