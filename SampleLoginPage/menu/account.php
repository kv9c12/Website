<?php
	require '../dbconfig/config.php';
	error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
<link rel="stylesheet" href="../css/account.css">
</head>
<body style="background-image: url('../images/back.jpg');background-size: cover;">	
	<a href="aboutus.php"><img id="logo" src="../images/logo.png"></a>
	<div id="title"><center style="margin-left: 10%;"> KGS Courier Services </center></div>
	<div id="board">
		<table>
			<form action="account.php" method="post" name="myform">
				<tr>
					<td>
						UserName: <br/><input type="text" name="username" class="inputbox">
					</td>
					<td>
						Address: <br/><input type="text" name="address" class="inputbox">
					</td>
				</tr>
				<tr>
					<td>
						Password: <br/><input type="password" name="password" class="inputbox">
					</td>
					<td>
						State: <br/><input type="text" name="state" class="inputbox">
					</td>
				</tr>
				<tr>
					<td>
						Confirm Password: <br/><input type="password" name="cpassword" class="inputbox">
					</td>
					<td>
						Country: <br/><input type="text" name="country" class="inputbox">
					</td>
				</tr>
				<tr>
					<td>
						Email-Id: <br/><input type="email" name="email" class="inputbox">
					</td>
					<td>
						Pincode: <br/><input type="text" name="pincode" class="inputbox">
					</td>
				</tr>
				<tr>
					<td>
						Date-of-Birth: <br/><input type="date" name="dob" style="width: 130px;" class="inputbox">
					</td>
					<td>
						<input type="submit" name="submit_btn" value="Submit" id="submit_btn">
					</td>
				</tr>
			</form> 	
		</table>
	</div>
	<div id="menu">
		<a href="homepage.php"><li style="margin-top: 10%;"><p>Dashboard</p></li></a>
		<a href="order.php" ><li><p>Place Order</p></li></a>
		<a href="request.php"><li><p>Service Providers</p></li></a>
		<a href="account.php"><li><p>Manage Account</p></li></a>
	</div>
	<?php
			$val = $_POST['username'];
			if(isset($_POST['submit_btn']) && $val!=" ")
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				$email=$_POST['email'];
				$dob=$_POST['dob'];
				$address=$_POST['address'];
				$state=$_POST['state'];
				$country=$_POST['country'];
				$pincode=$_POST['pincode'];
				
				if($password==$cpassword)
				{
					$query = "select * from userstable where username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into userstable values('$username','$password','$email','$dob','$address','$state','$country','$pincode')";
							$query_run= mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>
</body>
</html>