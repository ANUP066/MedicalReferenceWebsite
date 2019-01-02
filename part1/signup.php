<?php include('pass.php') ?>
<?php 
if(isset($_SESSION["username"])){
	unset($_SESSION['username']);
    session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="login1.css">
</head>
<body>
<div id="log">
	<img src="loginlogo.png" style="position: relative;top: 30px;left :285px;opacity: 1">
		      <span id="si"><h1 id="sig">Sign up was successful</h1><br><br>
				<p id="sigin">do you want to sign in?<a href="login.php">Sign in</a></p><p id="sigin">or</p>
				<p id="sigin">would you like to return to <a href="home.html">Home Page</a>?</p></span>
</div>
</body>
</html>
