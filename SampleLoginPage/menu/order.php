<?php
	require '../dbconfig/config.php';
	error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Details</title>
<link rel="stylesheet" href="../css/order.css">
</head>
<body style="background-image: url('../images/back.jpg');background-size: cover; background-attachment: fixed">	
	<a href="aboutus.php"><img id="logo" src="../images/logo.png"></a>
	<div id="title"><center style="margin-left: 10%;"> KGS Courier Services </center></div>
	<div id="board">
		<form action="order.php" method="post" class="form">
		<table>
		<tr>
			<td colspan="2">
				<center>Customer-Sender Details</center><br/>
			</td>
		</tr>
		<tr>
			<td>
				<label>FirstName:</label>
			</td>
			<td>
				<input type="text" name="sfname" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>MiddleName:</label> 
			</td>
			<td>
				<input type="text" name="smname" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>LastName:</label>
			</td>
			<td>
				<input type="text" name="slname" class="inputbox">
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<br/><center>Pickup Details</center><br/>
			</td>
		</tr>
		<tr>
			<td>
				<label>Address Line 1:</label>
			</td>
			<td>
				<input type="text" name="paddress1" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>Address Line 2:</label>
			</td>
			<td>
				<input type="text" name="paddress2" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>City:</label> 
			</td>
			<td>
				<input type="text" name="pcity" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>State:</label> 
			</td>
			<td>
				<input type="text" name="pstate" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>Country:</label>
			</td>
			<td>
				<input type="text" name="pcountry" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>PinCode: </label>
			</td>
			<td>
				<input type="text" name="ppincode" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>Pickup Date:</label> 
			</td>
			<td>
				<input type="date" name="pickdate" class="inputbox" style="width:10vw;">
			</td>
		</tr>
		<tr>
			<td>
				<label>Pickup Time:</label> 
			</td>
			<td>
				<input type="time" name="picktime" class="inputbox" style="width:10vw;">
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<br/><center>Customer-Receiver Details</center><br/>
			</td>
		</tr>
		<tr>
			<td>
				<label>FirstName:</label>
			</td>
			<td>
				<input type="text" name="rfname" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>MiddleName:</label> 
			</td>
			<td>
				<input type="text" name="rmname" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>LastName:</label>
			</td>
			<td>
				<input type="text" name="rlname" class="inputbox">
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<br/><center>Delivery Details</center><br/>
			</td>
		</tr>
		<tr>
			<td>
				<label>Address Line 1:</label> 
			</td>
			<td>
				<input type="text" name="daddress1" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>Address Line 2:</label> 
			</td>
			<td>
				<input type="text" name="daddress2" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>City: </label>
			</td>
			<td>
				<input type="text" name="dcity" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>State:</label>
			</td>
			<td>
				<input type="text" name="dstate" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>Country:</label>
			</td>
			<td>
				<input type="text" name="dcountry" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>PinCode:</label> 
			</td>
			<td>
				<input type="text" name="dpincode" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>Drop Date:</label> 
			</td>
			<td>
				<input type="date" name="dropdate" class="inputbox" style="width:10vw;">
			</td>
		</tr>
		<tr>
			<td>
				<label>Drop Time:</label> 
			</td>
			<td>
				<input type="time" name="droptime" class="inputbox" style="width:10vw;">
			</td>
		</tr>

		<tr>
			<td colspan="2"> 
				<br/><center>Service Providers</center><br/>
			</td>
		</tr>
		<tr>
			<td>
				<label>Select Service Provider:</label>
			</td>
			<td>
			<select class="inputbox" name="service">
				<option value="indiapost">Indian Postal Service</option>
				<option value="bluedart">Blue Dart Express</option>
				<option value="ekart">Ekart Express</option>
				<option value="dhl">DHL</option>
				<option value="fedex">FedEx</option>
				<option value="dtdc">DTDC</option>
			</select>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<br/><center>Payments</center><br/>
			</td>
		</tr>
		<tr>
			<td>
				<label>Payment Mode:</label>
			</td>
			<td>
			<select class="inputbox" name="pay">
				<option value="cash">Cash</option>
				<option value="card">Card</option>
				<option value="mobwallet">Mobile Wallet</option>
				<option value="paypal">PayPal</option>
				<option value="upi">UPI</option>
			</select>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<br/><center>Message</center><br/>
			</td>
		</tr>
		<tr>
			<td>
				<label>Message:</label> 
			</td>
			<td>
				<input type="text" name="message" class="inputbox" placeholder="Enter Your Message Here...">
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<br><center>Package Weight and Distance</center><br/>
			</td>
		</tr>
		<tr>
			<td>
				<label>Weight:</label>
			</td>
			<td>
				<input type="text" name="weight" class="inputbox">
			</td>
		</tr>
		<tr>
			<td>
				<label>Distance:</label>
			</td>
			<td>
				<input type="text" name="distance" class="inputbox">
			</td>
		</tr>
	</table>
	<br><br><br>
	<center style="margin-left: -20%;"><input type="submit" name="submit_btn" id="submit_btn" value="Submit"></center>
	</form>
	</div>
	<div id="menu">
		<a href="homepage.php"><li style="margin-top: 10%;"><p>Dashboard</p></li></a>
		<a href="order.php" ><li><p>Place Order</p></li></a>
		<a href="request.php"><li><p>Service Providers</p></li></a>
		<a href="account.php"><li><p>Manage Account</p></li></a>
	</div>
	<?php
			if(isset($_POST['submit_btn']))
			{
				$sfname=$_POST['sfname'];
				$smname=$_POST['smname'];
				$slname=$_POST['slname'];
				$rfname=$_POST['rfname'];
				$rmname=$_POST['rmname'];
				$rlname=$_POST['rlname'];
				$paddress1=$_POST['paddress1'];
				$paddress2=$_POST['paddress2'];
				$pcity=$_POST['pcity'];
				$pstate=$_POST['pstate'];
				$pcountry=$_POST['pcountry'];
				$ppincode=$_POST['ppincode'];
				$pickdate=$_POST['pickdate'];
				$picktime=$_POST['picktime'];
				$paddress1=$_POST['daddress1'];
				$paddress2=$_POST['daddress2'];
				$pcity=$_POST['dcity'];
				$pstate=$_POST['dstate'];
				$pcountry=$_POST['dcountry'];
				$ppincode=$_POST['dpincode'];
				$pickdate=$_POST['dropdate'];
				$picktime=$_POST['droptime'];
				$service=$_POST['service'];
				$pay=$_POST['pay'];
				$message=$_POST['message'];
				$weight=intval($_POST['weight']);
				$distance=intval($_POST['distance']);
				$rowSQL = mysqli_query( $con,"SELECT MAX( packageid ) AS max FROM orders;" );
				$row = mysqli_fetch_array( $rowSQL );
				$largestNumber = $row['max']+1;
				$query = "insert into orders values('$sfname','$smname','$slname','$paddress1','$paddress2','$pcity','$pstate','$pcountry','$ppincode','$pickdate','$picktime','$rfname','$rmname','$rlname','$daddress1','$daddress2','$dcity','$dstate','$dcountry','$dpincode','$dropdate','$droptime','$service','$pay','$message','$largestNumber')";
				$query_run= mysqli_query($con,$query);
				$message = $weight*$distance;
				echo "<script type='text/javascript'>alert('Your Delivery cost is: $message');</script>";
			}
		?>
</body>
</html>