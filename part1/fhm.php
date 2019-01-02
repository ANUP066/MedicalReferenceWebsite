<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
        
        <style>
@font-face {
            font-family: sansation;
            src: url(profonts/SansationLight.woff);
         }
@font-face {
      font-family: dakota;
      src:url(profonts/dakota_update.ttf);
}
@font-face {
      font-family: rounD;
      src: url(profonts/RounD-Regular.ttf);
}
@font-face{
      font-family: prod;
      src:url(profonts/Product Sans Regular.ttf);
}
@font-face{
      font-family: nikoleta;
      src:url(profonts/NIKOLETA.ttf);
}
@font-face{
      font-family: mona;
      src:url(profonts/Mona-Free.woff);
      font-stretch: expanded;
}
@font-face{
      font-family: belda ;
      src:url(profonts/insigne - Belda Norm Regular.otf);
}
@font-face{
    font-family: architex;
    src:url(profonts/Architex.ttf);
}
@font-face{
  font-family: goodtimes;
  src:url(profonts/good times rg.ttf);
}
nav{background-color: #333;position: fixed;top: 0;left:0;width: 100%;z-index: 1;margin: 0 auto;padding: 0;}
nav ul {list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;}
nav ul li{float: left;}
nav ul li a {display: inline-block; color: snow;text-align: center;text-decoration: none;padding: 14px 17px;height: 23px;font-size: 17px;font-family: sansation;}

nav ul li a:hover {background-color: silver;color:black;}
nav ul li.dropdown div.dropdown-content {display: block;position: absolute;background-color: #f9f9f9;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);z-index: 2;}
nav ul li.dropdown div.dropdown-content a {color: black;padding: 12px 16px;text-decoration: none;display: none;text-align: left;}
nav ul li.dropdown div.dropdown-content a:hover {background-color: #f1f1f1}
nav ul li.dropdown:hover div.dropdown-content a{display: block;}
nav li.dropdown a.dropbtn { background-color: lightseagreen;color:black;}
nav li a.logo{background-color: yellowgreen;color:black;}
nav li.button{float:right;}
li.button input{background-color: #333;border: 2px;border-color:snow;border-radius:10px;border-style:solid;color: snow;text-align: center;text-decoration: none;font-size: 17px; margin: 4px 4px;cursor: pointer;padding:12px 17px 8px;font-family: sansation;}
li.button input:hover{background-color: snow;border: 2px;border-color:snow;border-radius:10px;border-style:solid;color: black;}
nav li.icon ,a.icon{
  display: none;
  float: right;
}

@media screen and (max-width: 750px) {
  nav ul li a{display: none;}
  nav ul li a.logo{display: block;float:center;} 
   nav ul li.icon ,a.icon{
    display: block;
    float: right;
  }
}
@media screen and (max-width: 750px) {
  nav.responsive {position: fixed;top: 0px;}
  nav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  nav.responsive li{float:none;}
  nav.responsive li a {
    float: none;
    display: block;
    text-align: center;
  }
  nav.responsive li.button input{position: relative;left: 35%;}
}
       
        .parallax {
    
    background-image: url("healthcare.jpg");

    
    height: 500px;

    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    
    }
        #a2{position:relative;left:100px;}
        #a3{position:relative;left:150px;}
        #a4{position:relative;left:100px;color:#33CCCC;}
        body{overflow-x:hidden;margin: 0;padding: 0}
        </style>
</head>
<body class="common">
    <nav id="nav">
    <ul>
   <li><a href="#logo" class="logo"><img src="hi1.svg" height="23px" width="27px" /></a></li>
   <li><a href="home.php" >HOME</a></li>
   <li><a target="_blank" href="mini project/diseases.html">INFO</a></li>
   <li class="dropdown">
   <a href="javascript:void(0)" class="dropbtn">SERVICES</a>
    <div class="dropdown-content">
      <a href="#">Hospitals</a>
      <a target="_blank" href="mini project/news1.html">NEWS</a>
      <a target="_blank" href="wt/h.html">National Healthcare</a>
      <a href="stratplan.php">Strategic Planning</a>
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
      echo '<li><a href="login.php" id="login" class="active">LOGIN</a></li>';?>
   <li class="button"><form method="GET" action="proprac.html"><input type="submit" value="Register"></form></li>
   <li class="icon"><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a></li>
   </ul>
</nav>
        <div class="parallax"></div>
        <h1 id="a4">SMALL HOSPITAL GROUP PURCHASING (GPO)</h1>
        <h1 id="a4">AND RELATED DISCOUNTS.</h1>
        <br>
        <br>
        <h2 id="a4">We provide access to National and local Group Purchasing</h2>
        <h2 id="a4">Organizations with significant discounts.</h2>
        <br>
        <p id="a2">GPO effectively leverage the purchasing power of a group of businesses to obtain discounts from vendors based on the collective</p>
        <p id="a2"> buying power of the GPO members keeping costs down for healthcare organizations.</p>
        <br>
        <table>
        <tr>
        <td><img src="fhm2.jpg" id="a2"></td>
        <td><pre id="a3">Current clients achieve an average savings of 20% more than current purchasing methods.</pre></td>
        </tr>
        <br>
        <tr>
        <td><img src="fhm3.jpg" id="a2"></td>
        
        <td><pre id="a3">Our GPO provides large hospital system supply chain expertise and consulting services as a part of your participation.</pre></td>
        </tr>
        </table>
        <br>
        <img src="fhm4.jpg" id="a2">
        <h3 id="a4">Contact us and ask us today how we can assist your healthcare company.</h3>
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

