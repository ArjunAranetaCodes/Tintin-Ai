<?php
	session_start();
	//echo "Hello ".$_POST["choice"]."<br />";
	//echo $_POST["answer"];
	
	echo "<br />";
	
	$choice = $_POST["choice"];
	$answer = $_POST["answer"];
	
	if($choice == $answer){
		$_SESSION["points"] = $_SESSION["points"] + 1;
		echo "Point: 1";
	}else{
		$_SESSION["points"] = $_SESSION["points"] - 1;
		echo "Point: -1";
	}
	header("Location:questions.php");
?>