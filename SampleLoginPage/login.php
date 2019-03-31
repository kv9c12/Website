<?php
session_start();
require 'dbconfig/config.php';
// Report all errors except E_NOTICE   
error_reporting(E_ALL ^ E_NOTICE); 
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image:url('images/loginback.jpg');background-size:cover">

	<div id="main-wrapper">
		<center>
			<h2>Login</h2>
			<img src="images/loginpic.jpg" class="avatar1"/>
		</center>
	
	<form class="myform" action="login.php" method="post" name="loginForm">
		<label><font face="Comic Sans MS">Username:</font></label>
		<br>
		<input name="username" type="text" class="inputvalues" placeholder="Username" value="<?php if(isset($_COOKIE["username"])) {echo $_COOKIE["username"];} ?>" required/>
		<br>
		<br>
		
		<label><font face="Comic Sans MS">Password:</font></label>
		<br>
		<input name="password" type="password" class="inputvalues" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) {echo $_COOKIE["password"];}?>" required/>
		<br>
		
		<br/>
		<input type="checkbox" name="RememberMe" id="rem" <?php if(isset($_COOKIE["username"])) { ?> checked <?php }?>/>
		<label>Remember me</label>
		<p><?php if(isset($msg)) {echo $msg;} ?></p>
		<center><input type="submit" name="login" id="login_btn" value="Login"  onclick="myFunction(document.loginForm.username)" /><br></input>
		
		<a href="register.php" style="text-decoration:none"><input type="button" id="register_btn" value="Register"/></a><br></input>
		
		<a href="feedback.php" style="text-decoration:none"><input type="button" id="feedback_btn" value="Feedback"></a>
		
		<a href="contactme.php" style="text-decoration:none"><input type="button" id="contactme_btn" value="Contact Me"></a>
		
		</center>
	</form>
	<script>
            function myFunction(x) {
                // If x is not an alphabet or number
                var letters = /^[A-Za-z0-9]{5,}$/;
                if(x.value.match(letters))
                {
                    return true;
                }
                else
                {
                	x.value=" ";	
                    alert('Please input alphabet and numeric characters only');
                    return false;
                }
            }
     </script>
	<?php
	$val = $_POST['username'];
		if(isset($_POST['login']) && $val!=' ')
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$query = "select * from users where username='$username' AND password='$password'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$_SESSION['username']=$username;
 				if(!empty($_POST["RememberMe"]))
 				{
 				setcookie ("username", $_POST["username"], time() + (10 * 365 * 24 * 60 * 60));
 				setcookie ("password", $_POST["password"], time() + (10 * 365 * 24 * 60 * 60));
 				}
 				else
 				{
 				if(isset($_COOKIE["username"]))
 				{
 				setcookie ("username", "");
 				}
 				if(isset($_COOKIE["password"]))
 				{
 				setcookie ("password", "");
 				}
 				}
 				header('location:menu/homepage.php');
			}
			else
			{
				echo '<script type="text/javascript">alert("Invalid Credentials")</script>';
			}
		}
	?>
	</div>
</body>
</html>
