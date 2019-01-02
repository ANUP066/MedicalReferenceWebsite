<?php include('pass.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="login1.css">
	<style type="text/css">div.error{background-color: red;opacity: 0.7;border :2px solid red;border-radius: 4px;position: relative;left: 10px;top:-50px;width: 400px;}</style>
</head>
<body>
<div id="log">
<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		
		<?php include("errors.php"); ?>

			Username : <br>
			<input type="text" name="username" value="<?php echo $username; ?>"><br>
		
			Email : <br>
			<input type="email" name="email" value="<?php echo $email; ?>"><br>
	
			Password : <br>
			<input type="password" name="password_1"><br>
	
	
			Confirm password : <br>
			<input type="password" name="password_2"><br>
	

			<button type="submit" class="btn" name="reg_user">Register</button><br>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>;}

	</div>
</body>
</html>
