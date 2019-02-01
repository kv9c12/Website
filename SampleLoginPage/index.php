<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/webpage.css">
</head>
<body style="background-color:#ecf0f1;background-image:url('images/login.jpg');background-size:cover">
<div>
<div class="container" style="position:absolute;left:20%;">
  <a href="login.php"><img src="images/user.jpg" alt="Avatar" class="image">
  <div class="overlay" id="user">
    <div class="text" style="color:#F8EFBA"><font face="Comic Sans MS">Hello User</font></div>
  </div>
  </a>
</div>
<div class="container" style="position:absolute;right:20%">
  <a href="login.php"><img src="images/admin.jpg" alt="Avatar" class="image">
  <div class="overlay" id="admin">
    <div class="text" style="color:#2C3A47;"><font face="Comic Sans MS">Hello Admin</font></div>
  </div>
  </a>
</div>
	</div>

</body>
</html>
