<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="../css/webpage.css">
<script src="../Javascript/calendar.js"></script>
</head>
<body style="background-image: url('../images/back.jpg');background-size: cover;overflow: /*hidden*/;" scroll="yes" onload="displayCalendar()">	
	<a href="aboutus.php"><img id="logo" src="../images/logo.png"></a>
	<div id="title"><center style="margin-left: 10%;"> KGS Courier Services </center></div>
	<div id="board">
		<table>
				<th id="th1">
					<div>
						<img src="../images/accimg.jpg" style="height:12vw;width: 12vw">
						<div class="buttonwrapper">
						<div class="bulletl">
							<label style="margin-top: 12px">I</label>
						</div>
						<label>
						user
						</label>
						</div>
						<div class="buttonwrapper">
						<div class="bulletr">
							<label style="margin-top: 12px">N</label>
						</div>
						<label>
						user
						</label>
						</div>
						<div class="buttonwrapper">
						<div class="bulletl">
							<label style="margin-top: 12px">P</label>
						</div>
						<label>
						user
						</label>
						</div>
						<div class="buttonwrapper">
						<div class="bulletr">
							<label style="margin-top: 12px">A</label>
						</div>
						<label>
						user
						</label>
						</div>
					<br/><a href="logout.php" style="text-decoration: none"><input id="logout" type="button" name="logout" value="LogOut" /></a>
					</div>
				</th>
				<th id="th2">
					
				</th>
				<th id="th3">
					<div id="calendar"></div>
					<div style="position: absolute;bottom:1vw"><!--TIME watch here--><br><!--hello--><br><br></div>
				</th>
		</table>
	</div>
	<div id="menu">
		<a href="homepage.php"><li style="margin-top: 10%;"><p>Dashboard</p></li></a>
		<a href="order.php" ><li><p>Place Order</p></li></a>
		<!--<a href="track.php"><li><p>Track</p></li></a>-->
		<a href="request.php"><li><p>Service Providers</p></li></a>
		<!--<a href="payment.php"><li><p>Payment</p></li></a>-->
		<!--<a href="history.php"><li><p>Service History</p></li></a>-->
		<a href="account.php"><li><p>Manage Account</p></li></a>
	</div>
</body>
</html>