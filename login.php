<?php
	session_start();
	require_once('db.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Login Form</h2></center>
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
		<form action="" method="post">
		
			<div class="inner_container">
				<label><b>Email</b></label>
				<input type="email" placeholder="Enter email" name="email" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button class="login_button" name="login" type="submit">Login</button>
				<a href="register.php"><button type="button" class="register_btn">Register</button></a>
			</div>
		</form>
		
		<?php
			
			if(isset($_POST['login']))
			{
				
				$username=$_POST['email'];
				$password=$_POST['password'];
				
				$query = "select * from information where email='$username' and password='$password' ";
				$query1 = "select first_name from information where email='$username'";
				$query_run = mysqli_query($connection,$query);
				$query_run1 = mysqli_query($connection,$query1);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row1 = mysqli_fetch_array($query_run1,MYSQLI_ASSOC);	
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					$_SESSION['first_name'] =  $row1['first_name'];
					$_SESSION['email'] = $username;
					$_SESSION['password'] = $password;
					//echo "email: ".$_SESSION['email']." ".$username."password: ".$_SESSION['password']." ". $password;
					
					//header( "Location: homepage.php");
					echo("<script>window.location.href = 'homepage.php';</script>");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>
		
	</div>
</body>
</html>