<?php 
// session_start();
// if (isset($_POST['userid'])) {
    	// header('location:screeen7.php');
//     	exit();
//     }    
// 	$msg = Null;
// $appName = "Gas App";
//require 'api/sms/v1/bulksms.php';
//require 'api/random.php';
// Steps:
// 1. Connecting to the database
// 2. Obtain user sent data and process
// 3. Save to database



	date_default_timezone_set('Africa/Nairobi');
//db details
$server = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'gasapp';

//Connect and select the database
$conn = new mysqli($server, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	//echo "Connection established";
	 // header('location:screen7.php');

}


// Step 2: Capture sent data

if (isset($_POST['proceed'])) {
	$userdeliverylocation = $_POST['deliverylocation'];
	$userhousenumber = $_POST['housenumber'];
	// $userid = $_POST['id'];
	// $userdate = $_POST['date'];
	// $usertime = $_POST['time'];

	$status = 'inactive';
	$regDate = date('d-m-Y H:i:s');

	//Step 3: Store records in the DB

	$sql= "INSERT INTO `tbl_orders`( `deliverylocation`, `houseno`, `orderdate`, `ordertime`) VALUES ('$userdeliverylocation','$userhousenumber')";
	$query = mysqli_query($conn,$sql);
	if ($query == true) {
		$msg ="<span class='success'>Your delivery was sent successfully</span>";
	
		 
}else{
		// $msg ="<span class='danger'>something went wrong.please try again..</span>";
		
 header('location:screen7.php');
	}

}

 ?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gas app</title>
</head>
<body>
	<form action="" method="post">
		<div class="msg"><?php if (isset($msg)){
			print($msg);
		}?></div>
	<hr>
	<h1>CHECKOUT</h1>
	<h3>Billing & Delivery Details</h3>
	
	<hr>

	<div> 
<br>
	<br>
	<input type="text" name="deliverylocation"placeholder="Road/Street name,building" id="input" required>
	<br>
	<br>
	<br>
	<br>
	<input type="text" name="housenumber"placeholder="Apartment.house number (optional)" id="input" required]>
	<br>
	<br>

	<br>
	<input type="submit" name="proceed" value="proceed">
</form>

</body>
</html>
<style type="text/css">
	body{
		text-align: center;
		background-color: burlywood;
	}
	#label{
		margin-top: 20%;
	}
	#button{
		width: 300px;
		height: 50px;
		border-radius: 100px;
		text-align: center;
		
	}
	#input{
		width: 200px;
		height: 30px;
		text-align: center;
	}
	.alert{
		red
	}
</style>