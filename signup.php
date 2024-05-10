<?php
// data being collected
// mobile no
// fullname
// idno
// email
// password
// verification code
// pin location

$appname="gas app";
//require'api/sms/v1/bulksms.
//require'api/random.php;
//steps
//1.connecting to yhe data base
//2.obtain user sent data and process
//3.save to database
\session_start();
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
}






// Step 2: Capture sent data

if (isset($_POST['submit'])) {
	$userMobile = $_POST['mabile_no'];
	$userFirstname = $_POST['firstname'];

	$status = 'inactive';
	$regDate = date('d-m-Y H:i:s');

	//Step 3: Store records in the DB

	$sql= "INSERT INTO `tbl_users`( `firstname`, `mabileno`) VALUES ('$userFirstname','$userMobile')";
	$query = mysqli_query($conn,$sql);
	if ($query == true) {
		$msg ="<span class='success'>Your number was sent successfully</span>";
		 header('location:verify.php');
}else{
		$msg ="<span class='danger'>something went wrong...</span>";
	}

}



	






?>


<!DOCTYPE html>

<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gasapp/signup</title>
</head>
<style type="text/css">
	{
		text-align: center;
     background color: burlywood;
     background-repeat:no-repeat;
     background-size:100%;



	}



body{
text-align:center ;
     background-color: burlywood;
     background-repeat:no-repeat;
     background-size:100%;


}
#applink{
	list-style: none;
	display: inline-block;
	padding-left: 15px;
	margin-right: 12qapx;
}
#b1{
	width: 20px;
	height: 20px;
}
#screen2{
	text-align: left;
}
.btn{

	margin-top: 5%;
}
#home{

	width: 100px;
	height: 50px;
	padding-right: 200px;
	margin-top: 20px;
}
.name{
margin-top:10px;

}

.mobile{
	margin-top:15px;
}

</style>
<body>

<form action="" method="post">
		<div class="msg"><?php if (isset($msg)){
			print($msg);
		}?></div>
	</form>	

	<div id="signup li">
	<form id="signup" action="" method="post">
		<!-- <a href="verify.php"></a> -->
		
		<label><h4> enter  your details</h4></label>
		
	 <input type="text" name="newfirstname" placeholder="Enter firstname" maxlength="14" required class="name">
	 <br>

	 <input type="tel" name="newmobile_no" placeholder="0xxxxxxxxx" maxlength="14" required class="mobile">
	
	<br>


	<input type="submit" name="submit" value="Confirm" class="btn">
	<br><br>
	




</form>



</body>
</html>
