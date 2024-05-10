<?php
  require 'dbconfig.php';
if (isset($_POST['submit'])) {
	$userMobile = $_POST['mobile_no'];
	$userFirstname = $_POST['firstname'];

	$status = 'inactive';
	$regDate = date('d-m-Y H:i:s');

	//Step 3: Store records in the D
$sql = "INSERT INTO tbl_users (`firstname`, `mabileno`) VALUES ($userMobile, $userFirstname )";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ss", $userFirstname, $userMobile);
    if ($stmt->execute()) {
        $msg = "<span class='success'>Your number was sent successfully</span>";
        header('location:screen3.php');
    } else {
        $msg = "<span class='danger'>Something went wrong...</span>";
    }
    $stmt->close();
} else {
    $msg = "<span class='danger'>Error in prepared statement: " . $conn->error . "</span>";
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
		<a href="verify.php"></a>
		
		<label><h4>Enter your details</h4></label>
		<!-- <div id="signupformDiv"> -->
	<!-- <button id="btkenyaimage"><img src="images/jj.png" id="mykenyaimage"> -->
	 <input type="text" name="firstname" placeholder="Enter firstname" maxlength="14" required class="name">
	 <br>
	 <input type="tel" name="mobile_no" placeholder="0xxxxxxxxx" maxlength="14" required class="mobile">
	
	<br>


	<input type="submit" name=" " value="Confirm" class="btn">

<a href="order.php">


</form>



</body>
</html>
