<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stratigic Planning</title>
	<link rel="icon" href="icons8-Doctors Bag-40.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="strat.css">
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
      <a href="#">Strategic Planning</a>
      <a href="manage.php">Management Consulting</a>
    </div>
   </li>
   <li><a href="contact.php">CONTACT US</a></li>
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
	<h2>Strategic Planning</h2>
</div>
<div id="info" >
	<h2>WHY HAVE A STRATEGIC PLAN?</h2>
	<p>A strategic plan allows accountability from the hospital board of directors to the executive management team.</p>
	<p>Supporting the organizations mission and vision, the strategic plan establishes several goals that help focus resources, and measures to understand the effectiveness of the action.</p>
	<table>
		<tr>
			<td><img src="Franklin-Healthcare-Management-strategic-planning-bullet.jpg" height="40px" width="40px"></td>
			<td>The mission and vision serve as the ‘culture’ and rarely change</td>
			<td rowspan="3"><img src="Franklin-Healthcare-Management-strategic-planning-footer.jpg"></td>
		</tr>
		<tr>
			<td><img src="Franklin-Healthcare-Management-strategic-planning-bullet.jpg" height="40px" width="40px"></td>
			<td>Goals are 2–3 year targets with specific actionable approaches</td>
		</tr>
		<tr>
			<td><img src="Franklin-Healthcare-Management-strategic-planning-bullet.jpg" height="40px" width="40px"></td>
			<td>Measures monitor progress towards the goals and are the tool used to determine if <br/>particular strategies are working</td>
		</tr>
	</table>
	<p class="a">CONTACT US TODAY TO SEE HOW WE CAN ASSIST YOUR HEALTHCARE</p>
</div>
<div id="last">
	<p>© 2017 Healthcare Management.  All rights reserved. | Design © 2017 popdot media</p>
</div>
</body>
<script>
function myFunction() {
    var x = document.getElementById("nav");
    if (x.className === "") {
        x.className += " responsive";
    } else {
        x.className = "";
    }
}
</script>
</html>
