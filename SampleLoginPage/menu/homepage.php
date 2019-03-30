<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="../css/webpage.css">
<script src="../Javascript/calendar.js"></script>
</head>
<body style="background-image: url('../images/back.jpg');background-size: cover;overflow: /*hidden*/;" scroll="yes" onload="displayCalendar()">	
	<img id="logo" src="../images/logo.png">
	<div id="title"><center style="margin-left: 10%;"> KGS Courier Services </center></div>
	<div id="board">
		<table>
				<th id="th1">
					<div>
						<img src="../images/accimg.jpg">
						<div class="buttonwrapper">
						<div class="bulletl">
							<br />I
						</div>
						<label>
						user
						</label>
						</div>
						<div class="buttonwrapper">
						<div class="bulletr" style="background-color: #0984e3">
							<br/>N
						</div>
						<label>
						user
						</label>
						</div>
						<div class="buttonwrapper">
						<div class="bulletl" style="background-color: #0984e3">
							<br />P
						</div>
						<label>
						user
						</label>
						</div>
						<div class="buttonwrapper">
						<div class="bulletr" style="background-color: #0984e3">
							<br />A
						</div>
						<label>
						user
						</label>
						</div>
					</div>
				</th>
				<th id="th2">
					
				</th>
				<th id="th3">
					<div id="calendar"></div>
				</th>
		</table>
	</div>
	<div id="menu">
		<a href="homepage.php"><li style="margin-top: 10%;"><p>Dashboard</p></li></a>
		<a href="order.php" ><li><p>Place Order</p></li></a>
		<a href="track.php"><li><p>Track</p></li></a>
		<a href="request.php"><li><p>Requests</p></li></a>
		<a href="payment.php"><li><p>Payment</p></li></a>
		<a href="history.php"><li><p>Service History</p></li></a>
		<a href="account.php"><li><p>Manage Account</p></li></a>
	</div>
</body>
</html>