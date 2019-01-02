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
body{margin:0;background-color: snow;padding: 0;}
nav{background-color: #333;position: fixed;top: 0;left:0;width: 100%;z-index: 1;margin: 0 auto;padding: 0;}
nav ul {list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;}
nav ul li{float: left;}
nav ul li a {display: inline-block; color: snow;text-align: center;text-decoration: none;padding: 14px 17px;height: 23px;font-size: 17px;font-family: sansation;}

nav ul li a:hover {background-color: silver;color:black;}
nav ul li.dropdown div.dropdown-content {display: block;position: absolute;background-color: #f9f9f9;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);z-index: 2;}
nav ul li.dropdown div.dropdown-content a {color: black;padding: 12px 16px;text-decoration: none;display: none;text-align: left;}
nav ul li.dropdown div.dropdown-content a:hover {background-color: #f1f1f1}
nav ul li.dropdown:hover div.dropdown-content a{display: block;}
nav li a.active { background-color: lightseagreen;color:black;}
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
    
    background-image: url("abt1.png");

    
    height: 500px;

    
    background-attachment: fixed;
    background-position: center;
    background-repeat:no-repeat;
    
    }
            .parallax1 {
    
    background-image: url("abt2.png");

    
    height: 500px;

    
    background-attachment: fixed;
    background-position: center;
    background-repeat:no-repeat;
    
    }
    
    #a1{position:relative;left:50px;}
    #a2{position:relative;left:150px;}
    
    body{overflow-x:hidden;margin:0px; padding:0px;}
    #last{background-color: black;color:white;padding:5%;font-family: belda;text-align: center; }
        </style>
</head>
<body>
<nav id="nav">
	<ul>
   <li><a href="#logo" class="logo"><img src="hi1.svg" height="23px" width="27px" /></a></li>
   <li><a target="_blank" href="home.html">HOME</a></li>
   <li><a href="mini project/diseases.html">INFO</a></li>
   <li class="dropdown">
   <a href="javascript:void(0)" class="dropbtn">SERVICES</a>
    <div class="dropdown-content">
      <a href="fhm.php">Hospitals</a>
      <a href="#">IT</a>
      <a target="_blank" href="wt/h.html">National Healthcare</a>
      <a href="stratplan.php">Strategic Planning</a>
      <a href="manage.php">Management Consulting</a>
    </div>
   </li>
   <li><a href="contact.php">CONTACT US</a></li>
   <li><a href=""  class="active">ABOUT US</a> </li>
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
        <div class="parallax"></div>
        <br>
        <h1 id="a1">Quality small hospital and health facility management services</h1>
        <br>
        <b id="a1">We offer extensive management experience for small hospital and health facilities.</b>
        <br>
        <p id="a1">Our focus is on serving the needs of small hospital and health facilities including those in rural and small communities.</p>
        <br>
        <p id="a1">Our experience covers a range of service areas, including Critical Access Hospitals (CAH) and rural hospital designations.</p>
        <br>
        <p id="a1">Consulting services including strategic planning, finance and revenue cycle management</p>
        <p id="a1">consulting, National healthcare legal consulting, National healthcare information </p>
        <p id="a1">technology consulting, and interim management, or take advantage of our Small Hospital.</p>
        <br>
        <br>
        <table>
        <tr>
        <td><h1 id="a1">We serve the needs of community based </h1>
        <br><h1 id="a1">small hospitals and health facilities</h1></td>
        <td><img src="abt1.jpg"></td>
        </tr>
        </table>
        <br>
        <b id="a1">We believe all healthcare is local.</b>
        <br>
        <br>
        <p id="a1">Whether medical care is provided in a large metropolitan city or in a rural county hospital, healthcare really comes down to professional</p>
        <p id="a1">healthcare providers taking care of their friends and neighbors.</p>
        <br>
        <br>
        <p id="a1">Our mission is to preserve the tradition of providing quality healthcare services for communities</p>
        <p id="a1">regardless of the location or size.</p>
        <br>
        <br>
        <img src="abt2.jpg" id="a1">
        <h2 id="a1">Contact us today to see how we can assist your healthcare company.</h2>
        <div class="parallax1"></div>
        <h1 id="a1">We are the experts in healthcare management</h1>
        <br>
        <p id="a1">We have brought together expertise from National healthcare companies with deep management</p>
        <p id="a1">experience in the hospital, finance, operations, healthcare information technology, and legal areas.</p>
        <table>
        <tr>
        <td><img src="abt3.jpg" id="a1"></td>
        <td><p id="a2">This system was formed with the express purpose of helping stand-alone</p>
        <p id="a2">hospitals to retain their local ownership and management, and at the same time, while gaining</p>
        <p id="a2">access to these cost effective systems, services, and information that allow large National hospital.</p>
        </td>
        </tr>
        </table>
        <div id="last">
	<p>© 2017 Healthcare Management.  All rights reserved. | Design © 2017 popdot media</p>
</div>
</body>
</html>
