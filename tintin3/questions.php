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
		font-family:Courier New, Bookman Old Style;
	}
</style>
<?php
	session_start();
	if(!isset($_SESSION["user"])){
		$_SESSION["user"] = $_POST["username"];
		$_SESSION["points"] = 0;
	}

	$items = array
	  (
	  array("Question1","Choice1","Choice2","Choice3","Choice4","Choice1"),
	  array("Question2","Choice1","Choice2","Choice3","Choice4","Choice1"),
	  array("Question3","Choice1","Choice2","Choice3","Choice4","Choice2"),
	  array("Question4","Choice1","Choice2","Choice3","Choice4","Choice2"),
	  array("Question5","Choice1","Choice2","Choice3","Choice4","Choice3"),
	  array("Question6","Choice1","Choice2","Choice3","Choice4","Choice3"),
	  array("Question7","Choice1","Choice2","Choice3","Choice4","Choice4"),
	  array("Question8","Choice1","Choice2","Choice3","Choice4","Choice4"),
	  array("Question9","Choice1","Choice2","Choice3","Choice4","Choice2"),
	  array("Question10","Choice1","Choice2","Choice3","Choice4","Choice2")
	  );
	
	$val = rand(0,9);
	
	echo '<div id="wrapper">';
	
		if(isset($_SESSION["user"])){
			echo "<h2>Hello ".$_SESSION["user"]."</h2><br />";
			//echo $_SESSION["points"]."<br />";
		}
		echo '<form action="compute.php" method="post" class="hero-unit">';
		echo "<p>".$items[$val][0]."</p>";
		echo "<p><input type='radio' name='choice' value='".$items[$val][1]."'/> ".$items[$val][1]."</p>";
		echo "<p><input type='radio' name='choice' value='".$items[$val][2]."'/> ".$items[$val][2]."</p>";
		echo "<p><input type='radio' name='choice' value='".$items[$val][3]."'/> ".$items[$val][3]."</p>";
		echo "<p><input type='radio' name='choice' value='".$items[$val][4]."'/> ".$items[$val][4]."</p>";
		echo "<input type='hidden' name='answer' value='".$items[$val][5]."'/>";
		echo '<input type="submit" value="Submit"/>';
		echo "</form>";
		
		echo '<h2><a href="save.php?user='.$_SESSION["user"].'&points='.$_SESSION["points"].'">Finish Exam</a></h2>';
	echo '</div>';
?>