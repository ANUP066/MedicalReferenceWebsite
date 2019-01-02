<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav id="nav">
	<ul>
   <li><a href="#logo" class="logo"><img src="hi1.svg" height="23px" width="27px" /></a></li>
   <li><a href="home.php">HOME</a></li>
   <li><a target="_blank" href="mini project/diseases.html">INFO</a></li>
   <li class="dropdown">
   <a href="javascript:void(0)" class="dropbtn">SERVICES</a>
    <div class="dropdown-content">
      <a href="fhm.php">Hospitals</a>
      <a target="_blank" href="mini project/news1.html">NEWS</a>
      <a target="_blank" href="wt/h.html">National Healthcare</a>
      <a href="stratplan.php">Strategic Planning</a>
      <a href="manage.php">Management Consulting</a>
    </div>
   </li>
   <li><a href="#contact" class="active">CONTACT US</a></li>
   <li><a href="abtus.php">ABOUT US</a> </li>
   <?php 
    if(isset($_SESSION['username'])) 
   		echo '<li><a href="login.php" id="login">LOG OUT</a></li>
   			  <li><a href="">'.$_SESSION['username'].'</a></li>'; 
   	else 
   		echo '<li><a href="login.php" id="login">LOGIN</a></li>';?>
   <li class="button"><form method="GET" action="proprac.html"><input type="submit" value="Register"></form></li>
   <li class="icon"><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a></li>
   </ul>
</nav>
<div id="first">

</div>
<div id="sec">
	<h2>TALK WITH US ABOUT YOUR NEEDS.</h2>
	<h3>We would love to talk with you about your organization’s<br>healthcare services needs.</h3>
</div>
<table cellspacing="20px" cellpadding="20px" align="center">
	<tr>
	<td><span class="tsec">HEALTHCARE MANAGEMENT, LLC</span><br><br>
		<span>424 Church Street<br>
 		Suite 2800<br>
		Nashville, TN 37219<br><br>
		Email:  <a href="www.gmail.com" class="mail">aptnrg007@gmail.com</a><br>
		Call: 615-510-3325
		<span><br><br><br>
		<div id="map" style="width:400px;height:400px;padding: 0;margin: 0"></div><br>
	</td>
	<td>
		<form method="post" action="getc.php">
			Name :<br><input type="text" name="name" placeholder="first name" id="fname"> <input type="text" name="name" placeholder="last name" id="lname"><br><br>
			E-mail :<br><input type="E-mail" name="email" id="email"><br><br>
			Subject :<br><input type="text" name="sub" id="sub"><br><br>
			Message :<br><textarea cols="35" rows="4" name="message"></textarea><br><br>
			<button type="submit" name="submit">Submit</button>
		</form>

	</td>
	</tr>
	
</table>
<div id="con">
<a href="#" class="fa fa-facebook"></a><br>
<a href="#" class="fa fa-twitter"></a><br>
<a href="#" class="fa fa-google"></a><br>
<a href="#" class="fa fa-youtube"></a><br>
</div>
<div id="last">
	<p>© 2017 Healthcare Management.  All rights reserved. | Design © 2017 popdot media</p>
</div>
</body>
<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(12.9716, 77.5946),
    zoom: 4,
   // mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
var x = document.getElementById("fname");
x.addEventListener("focus", myFocusFunction1, true);
x.addEventListener("blur", myBlurFunction1, true);
var y = document.getElementById("lname");
y.addEventListener("focus", myFocusFunction2, true);
y.addEventListener("blur", myBlurFunction2, true);
var z = document.getElementById("email");
z.addEventListener("focus", myFocusFunction3, true);
z.addEventListener("blur", myBlurFunction3, true);
var w = document.getElementById("sub");
w.addEventListener("focus", myFocusFunction4, true);
w.addEventListener("blur", myBlurFunction4, true);
function myFocusFunction1(l) {
    document.getElementById("fname").style.backgroundColor = "yellow";  
}

function myBlurFunction1(l) {
    document.getElementById("fname").style.backgroundColor = ""; 
}
function myFocusFunction2(l) {
    document.getElementById("lname").style.backgroundColor = "yellow";  
}

function myBlurFunction2(l) {
    document.getElementById("lname").style.backgroundColor = ""; 
}
function myFocusFunction3(l) {
    document.getElementById("email").style.backgroundColor = "yellow";  
}

function myBlurFunction3(l) {
    document.getElementById("email").style.backgroundColor = ""; 
}
function myFocusFunction4(l) {
    document.getElementById("sub").style.backgroundColor = "yellow";  
}

function myBlurFunction4(l) {
    document.getElementById("sub").style.backgroundColor = ""; 
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB7bo0rEbWG5rxYG8fqMYNkGthZ8PJgHc&callback=myMap"></script>
</html>
<!--geometric-vim-186321
AIzaSyC-757YYEMVg6bAhE8RVMrM0OZ9OpqL9Wc-->
