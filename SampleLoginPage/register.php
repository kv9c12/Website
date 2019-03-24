<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image:url('images/signup.jpg');background-size:cover">
	<div id="main-wrapper">
		<center>
			<h2>Registration</h2>
			<img src="images/register.jpg" class="avatar1"/>
		</center>
	
	<form class="myform" action="register.php" method="post" name="loginForm">
		<label>Username:</label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Enter Username" required/><br><br>
		<label>Password:</label><br>
		<input name="password" type="password" class="inputvalues" placeholder="Enter Password" required/><br><br>
		<label>Confirm Password:</label><br>
		<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm Password" required/><br>
		<center><input name="submit_btn" type="submit" id="signup_btn" value="Sign Up" onclick="myFunction(document.loginForm.password,document.loginForm.username)"/>
		<a href="login.php" style="text-decoration:none"><input type="button" id="back_btn" value="<< Back"/><br>
	</form>
        <script>
            function myFunction(x,y) {
                // If x is not an alphabet or number
                var letters = /^[A-Za-z0-9]{8,15}$/;
                if(x.value.match(letters))
                {
                    return true;
                }
                else
                {
                	y.value=" ";
                    alert('Please input alpha-numeric characters of atleast 8 character length');
                    return false;
                }
            }
        </script>
	<?php
	$val = $_POST['username'];
			if(isset($_POST['submit_btn']) && $val!=" ")
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from users where username='$username'";
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
							$query = "insert into users values('$username','$password')";
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
	</div>
</body>
</html>
