<!DOCTYPE html>
<html>
<head>
	<title>Requests</title>
<link rel="stylesheet" href="../css/requests.css">
</head>
<body style="background-image: url('../images/back.jpg');background-size: cover;" >	
	<a href="aboutus.php"><img id="logo" src="../images/logo.png" ></a>
	<div id="title"><center style="margin-left: 10%;"> KGS Courier Services </center></div>
	<div id="board" style="background-color: white">
		<!--xml file here-->
		<center style="margin-top: 3vw;font-size: 20px">
		- Our Mission -
		</center>
		<?php
		$xml=simplexml_load_file("aboutus.xml") or die("Error: Cannot create object");
		echo "<br><center>" . $xml->mission . "</center><br>";
		echo "<center style='font-size: 20px'>About Us</center><br>";
		echo "<div style='margin-left:1vw'><span style='margin-left:2vw'>" . $xml->about . "</span></div><br><br><br><br><div style='margin-left:35%'>";
		echo "HeadQuarters: &nbsp&nbsp&nbsp" . $xml->headquarters . "<br>";
		echo "Regional Offices:&nbsp " .$xml->regionaloffice . "<br>";
		echo "Timings:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$xml->timing . "<br>";
		echo "Mobile:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$xml->mobile . "<br>";
		echo "E-mail:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " .$xml->mail . "</div>";
		?>
	</div>
	<div id="menu">
		<a href="homepage.php"><li style="margin-top: 10%;"><p>Dashboard</p></li></a>
		<a href="order.php" ><li><p>Place Order</p></li></a>
		<a href="track.php"><li><p>Track</p></li></a>
		<a href="request.php"><li><p>Service Providers</p></li></a>
		<a href="payment.php"><li><p>Payment</p></li></a>
		<a href="history.php"><li><p>Service History</p></li></a>
		<a href="account.php"><li><p>Manage Account</p></li></a>
	</div>
</body>
</html>