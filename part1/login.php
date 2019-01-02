<?php include('pass.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="icon" href="icons8-Doctors Bag-40.png">
  <link rel="stylesheet" type="text/css" href="login.css">
  <style type="text/css">div.error{background-color: red;opacity: 0.7;border :2px solid red;border-radius: 4px;position: relative;left: 100px;top:50px;width: 400px;}</style>
</head>
<body>
<nav id="nav">
  <ul>
    <?php 
    if(isset($_SESSION['username'])){
      echo '<li><a href="#logo" class="logo"><img src="hi1.svg" height="23px" width="27px" /></a></li>
   <li><a href="home.php" >HOME</a></li>
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
   <li><a href="contact.php">CONTACT US</a></li>
   <li><a href="abtus.php">ABOUT US</a> </li>
            <li><a href="login.php" id="login" class="active">LOG OUT</a></li>
            <li><a href="">'.$_SESSION['username'].'</a></li>
            <li class="button"><form method="GET" action="proprac.html"><input type="submit" value="Register"></form></li>
   <li class="icon"><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a></li>';
      } 
    else 
      echo '<li><a href="#logo" class="logo"><img src="hi1.svg" height="23px" width="27px" /></a></li>
   <li><a href="home.html" >HOME</a></li>
   <li><a target="_blank" href="mini project/diseases.html">INFO</a></li>
   <li class="dropdown">
   <a href="javascript:void(0)" class="dropbtn">SERVICES</a>
    <div class="dropdown-content">
      <a href="fhm.html">Hospitals</a>
      <a target="_blank" href="mini project/news1.html">NEWS</a>
      <a target="_blank" href="wt/h.html">National Healthcare</a>
      <a href="stratplan.html">Strategic Planning</a>
      <a href="manage.html">Management Consulting</a>
    </div>
   </li>

   <li><a href="contact.html">CONTACT US</a></li>
   <li><a href="abtus.html">ABOUT US</a> </li>
        <li><a href="login.php" id="login" class="active">LOGIN</a></li>
        <li class="button"><form method="GET" action="proprac.html"><input type="submit" value="Register"></form></li>
   <li class="icon"><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a></li>';?>
   
   </ul>
</nav>
 <div id="log">
  <img src="loginlogo.png" style="position: relative;top: 30px;left :285px;opacity: 1"><br>
  <?php include('errors.php'); ?>
  <?php
    if(isset($_SESSION['username'])){
      echo "<form method='post' action='login.php' id='form'>
      <h1 style='position:relative;text-align:center;font-family:sansation;top:20px;right:100px;font-size :60px;color:teal;'>".$_SESSION['username']."<br><br>yo are loged in<br></h1>
      <button type='submit' style='position:relative;top:100px;left:20px; ' name='logout'>Log Out</button>
      </form>";
  }
    else
    {echo "<form method='post' action='login.php' id='form'>
  LOGIN ID :<br><input type='text' name='id' placeholder='username'><br><br>
  PASSWORD :<br><input type='password' name='password' placeholder='password'><br><br>
  <button type='submit' name='login_user'>Login</button><br>
  <input type='checkbox' checked='checked'> Remember me
  <br><br><br>
  <button type='button' class='cancelbtn'>Cancel</button><span class='psw'>Forgot <a href='#'>password?</a></span>
  <br><br><br>would you like to sign up ?<br>
  <button type='button' name='signup' onclick='loc()'>Sign Up</button><br> 
 </form>";
}
  ?>
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
function loc(){
  window.location.href="register.php";
}


</script>
</html>
