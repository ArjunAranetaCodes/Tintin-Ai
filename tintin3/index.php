<?php
	include '../tintin/index.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="bootstrap.css" />
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
		
		body{
			background:url('bg1.png');
			background-size:cover;
		}
    </style>
</head>
<body>	
    <div class="container">

      <form class="form-signin"action="questions.php" method="post">
        <h2 class="form-signin-heading">Welcome</h2>
        <input type="text" class="input-block-level" name="username" placeholder="Username">
        <button class="btn btn-large btn-primary" type="submit">Start!</button>
		<a href="leaderboard.php" class="btn btn-info btn-large pull-right">Show Leaderboard</a> <br />
      </form>

    </div> <!-- /container -->
	
</body>
</html>