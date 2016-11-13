<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inventory System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>
<?php include 'modal/modal.php'?>
<?php include 'modal/updatemodal.php'?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">INVENTORTY SYSTEM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">STOCKS</a></li>
        <li><a href="#">ORDERS</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="btn btn-link "><span class="glyphicon glyphicon-log-in "></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
	 <p><a class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#additemmodal"><span class="glyphicon glyphicon-plus"></span> Add Item</a></p>
    <p><a class="btn btn-primary btn-lg btn-block"  data-toggle='modal' data-target='#updateitemmodal'><span class="glyphicon glyphicon-pencil"></span> Edit Item</a></p>
	</div>
    <div class="col-sm-8 text-left">
       <div class="table-responsive">
  <?php
	$server = 'localhost';
	$username = 'root1';
	$password ='';
	$dbname = 'dbinventory';
	
	$conn = new mysqli($server,$username,$password,$dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$selectquery = "select * from `tlbstocks`";
	$output = $conn->query($selectquery);
	echo "<table class='table' id ='tbldesign'>
			<tr>
			<th>Item ID</th>
			<th>Item Name</th>
			<th>Date In</th>
			<th>Stocks</th>
			<th>Supplier</th>
			<th>Price</th>
			<th>Action</th>
			</tr>";
	
	if ($output->num_rows>0) {
		while ($row = $output->fetch_assoc()){
			echo "<tr>
			<td>".$row["ItemID"]."</td>
			<td>".$row["ItemName"]. "</td>
			<td>".$row["DateIN"]. "</td>
			<td>".$row["Stocks"]."</td>
			<td>".$row["Supplier"]."</td>
			<td>".$row["Price"]."</td>
			<td><a href='deleteitem.php?itemid=".$row['ItemID']."'>Delete</a></td>
			</tr>";
	}
		echo "</table>";
	}else {
		echo "0 results";
	}
	$conn->close();
?>
  </div>
    </div>
    <div class="col-sm-2 sidenav">
  
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Inventory System</p>
</footer>
 <script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

