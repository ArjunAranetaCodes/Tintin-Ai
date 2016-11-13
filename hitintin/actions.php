<?php	
	//keywords for the colors of elements
	$request = $_POST["request"];
	$colors = array("red", "blue", "green", "gray", "white");
	$optionsHide = array("hide", "remove");
	$optionsUnHide = array("unhide", "bring back", "show");
	
	session_start();
	
	if($_SESSION["chosen_website"] == "1"){
		if(strpos($request, "background")) {
			//this is for background color
			$matchColor = "";
			for($i = 0; $i<count($colors); $i++){
				if(strpos($request, $colors[$i])) {
					$matchColor = $colors[$i];
					changeCSS("body", "background-color", $matchColor);
				}			
			}
			echo "chaging background color to ".$matchColor;
		}elseif(strpos($request, "menu")){
			//this is for background color
			$matchOptions = "";
			
			for($i = 0; $i<count($optionsHide); $i++){
				if(strpos(" ".$request, $optionsHide[$i])) {
					$matchOptions = $optionsHide[$i];
					changeCSS("#menu", "display", "none");
				}			
			}
			
			if($matchOptions == ""){
				for($i = 0; $i<count($optionsUnHide); $i++){
					if(strpos(" ".$request, $optionsUnHide[$i])) {
						$matchOptions = $optionsUnHide[$i];
						changeCSS("#menu", "display", "block");
					}			
				}		
			}
			
			echo "chaging menu to ".$matchOptions;
		}elseif(strpos($request, "paragraph text to")){
			//this is for background color
			$matchOptions = "";
			
			$request = trim($request);
			$index1 = strpos($request, "paragraph text to") + 18;
			$parContent = substr($request, $index1, strlen($request) - $index1);
			
			changeCSS("#paragraph1:before", "content", '"'.$parContent.'"');
			
			//echo "chaging menu to ".$matchOptions;
		}elseif(strpos(" ".$request, "go to website")){
			//this is for background color
			
			//1 for testing
			//2 for business website
			changeSite("2");
			
			//echo "chaging menu to ".$matchOptions;
		}else{
			//echo "I'm sorry, I don't recognize the request.";
		}
	}
	
	if(strpos(" ".$request, "go to testing")){
		//this is for background color
		
		//1 for testing
		//2 for business website
		changeSite("1");
		
		//echo "chaging menu to ".$matchOptions;
	}
	
	if(strpos(" ".$request, "go to math")){
		
		//3 for quiz 
		changeSite("3");
		
	}
	
	if(strpos(" ".$request, "go to inventory")){
		
		//3 for quiz 
		changeSite("4");
		
	}
	
	//conditions for website
	if($_SESSION["chosen_website"] == "2"){
		if(strpos($request, "business name to")){
			//this is for background color
			$matchOptions = "";
			
			$request = trim($request);
			$index1 = strpos($request, "business name to") + 17;
			$parContent = substr($request, $index1, strlen($request) - $index1);
			$parContent = str_replace("'", "\'",$parContent);
			
			changeCSS2("#businessname:before", "content", '"'.$parContent.'"');
			
			//echo "chaging menu to ".$matchOptions;
		}else{
			//echo "I'm sorry, I don't recognize the request.";
		}
	}
		
	function changeCSS($selector, $property, $value){
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
		
		$sql = "UPDATE tbl_basicprop SET css_selector = '".$selector."', css_property = '".$property."', css_value = '".$value."' where css_selector= '".$selector."' and css_property = '".$property."'";

		if ($conn->query($sql) === TRUE) {
			if($selector == "background"){
				echo "Background Color Changed! <br />";			
			}elseif($selector == "#menu"){
				echo "Menu Display Changed! <br />";			
			}
			
			header( "Refresh:2; url=index.php", true, 303);
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
	}
		
	function changeCSS2($selector, $property, $value){
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
		
		$sql = "UPDATE tbl_business SET css_selector = '".$selector."', css_property = '".$property."', css_value = '".$value."' where css_selector= '".$selector."' and css_property = '".$property."'";

		if ($conn->query($sql) === TRUE) {
			if($selector == "background"){
				echo "Background Color Changed! <br />";			
			}elseif($selector == "#menu"){
				echo "Menu Display Changed! <br />";			
			}
			
			header( "Refresh:2; url=index.php", true, 303);
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
	}
	
		
	function changeSite($value){
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
		
		$sql = "UPDATE tbl_website SET chosen_website = '".$value."'";

		if ($conn->query($sql) === TRUE) {			
			header( "Refresh:2; url=index.php", true, 303);
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
	}
	
?>