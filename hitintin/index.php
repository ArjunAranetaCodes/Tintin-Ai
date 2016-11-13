<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>	
	<link rel="stylesheet" href="bootstrap.css" />
	<style type="text/css">
	#wrapper{
		margin:0px auto;
		width:500px;
		height:400px;
	}
		
	body{
		background-color:#fab977;
	}
	
	.hero-unit{
		background-color:#e72b4a;
		font-family:Courier New, Bookman Old Style;
		padding-right:60px;
		padding-top:0px;
	}
	
	textarea{
		width:100%;
	}
	
	img{
		text-align:center;
		margin:0px auto;
		height:280px;
		padding-left:30px;
	}
</style>
</head>
<body>
	<div id="wrapper">
		<form action="actions.php" method="post" class="hero-unit">
			<img src="tintin.png" alt="" />
			<textarea name="request" id="" cols="30" rows="10"></textarea>
			<br />
			<input type="submit" value="Submit" class="btn btn-success" style="width:100%;padding:20px;margin:0px auto;"/>
		</form>
	</div>
</body>
</html>