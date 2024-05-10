 <?php 
 if (isset($_POST['order'])) 
  	// add user to database
  	$msg="Order is succesful";
  // header('location:order.php');
 	//capture submitted data
 	// $new=$_POST['new'];
 	// $repeat=$_POST['repeat'];
 	// $Follow_up=$_POST['Follow_up'];

if (empty($new)) {
$msg="Please place your new order";
}
 else { 
 	// ask user to register
 	$msg="Please provide your full order details";
 }
if (empty($repeat)) {
$msg="Please repeat our order";
}
 else { 
 	// ask user to register
 	$msg="Please provide your full order details";
 }



if (empty($Follow_up)) {
$msg="please follow my ongoing order";
}
 else { 
 	// ask user to register
 	$msg="Please provide your full order details";
 	


 	

 }
  


 ?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gas app</title>
</head>
<style type="text/css">
	body{
		
	}

	}
	#paragraph{
	display: inline-flex;
	}
	#logo6{
		width: 200px;
		height:200px;
		margin-top: 100px;
		padding-right: 70px;	}
	#div{
				text-align: left;

	}
	#button{
		width: 500px;
		height: 50px;
		text-align: left;
		margin-top: 20px;
	}

</style>
<body>
	<div id="paragraph"><img src="images/jamila.jpg" id="jamila">cylinder refilled at an affordable price <br><br></div>
	<br>
	<div id="div">
	<h2>HELLO,</h2>
	<h2>Thanks for visiting our app,<br>
	would you like to place an order</h2>
	<form action="" method="post">
		<div class="msg"><?php if (isset($msg)){
			print($msg);
		}?></div>
<input type="Place new order" name="new"placeholder="place new order" id="applink" required>
<br>
<br>
<input type="Repeat my order" name="repeat"placeholder="Repeat my order" id="mobile" required>
<br>
<br>
<input type="Follow my ongoing order" name="Follow_up"placeholder="Follow my ongoing order" id="button" required>
<br>
<!-- <a href="order.php"> -->
	</form>
<button id="button1">Proceed</button>
</a>
</div>
</body>
</html>
<style type="text/css">
	body{
		background-color: burlywood;
	}
	#applink{
		margin-top: 2%;
		width: 300px;
		height: 50px;
		text-align: center;
	}
	#mobile{
			margin-top: 2%;
		width: 300px;
		height: 50px;
		text-align: center;
	}
	#button{
			margin-top: 2%;
		width: 300px;
		height: 50px;
		text-align: center;
	}
	#button1{

			margin-top: 5%;
		width: 300px;
		height: 50px;
		text-align: center;
		border-radius: 100px;

	}

</style>