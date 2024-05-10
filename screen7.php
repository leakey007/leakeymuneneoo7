<?php 




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
		background-color: burlywood;
		text-align: center;
	}
	#div{
		background-color: #D9D9D9;
       }
    #table{
    	border-color: black;
    	text-align:left ;
    	width: 500px;
    	height: 400px;
    }

    #button{
    	width:200px;
    	height: 30px;
    	border-radius: 100px;
    	cursor: pointer;
    }
</style>
<body>
	<form action=""method="post">
		
		
	<h3>Order notes (optional)</h3>
	<br>
	<div id="div">Please tell us if you need any other item, instructions</div>
	<br>
	<h4>Your order</h4>
	<br>
	<table align="center" border="1" id="table">
		<thead>
			<tr><th>Product </th>
			<th>Total</th></tr>
		</thead>
		<br>
		<tbody>
			<tr>
			<td>Shell gas 6kg- new cylinder</td>
			<td>KSH.3500</td></tr>
			<tr>
				<td>Shell gas 13kg-refill</td>
				<td>KSH.1500</td>
			</tr>
			<tr>
				<td>SUBTOTAL</td>
				<td>KSH 5000</td></tr>
		    <tr>
		    	<td>DELIVERY</td>
		    	<td>KSH.200</td>
		    </tr>
		    <tr>
		    	<td>TOTAL</td>
		    	<td>KSH.5200</td>
		    </tr>
					
		</tbody>
	</table>
	
<h4>M-PESA ONLY</h4>
<a href="screen8.php">
	
<input type="submit" name="proceed" value="place order">
</form>
</a>
</body>
</html>