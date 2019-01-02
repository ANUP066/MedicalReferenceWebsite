<?php 
	$radio="radio";
	$value=$_POST["gen"];
	setcookie($radio,$value, time()+36000,"/"); ?>
<?php 
$cookie_name = "Full_Name";
$cookie_value = $_POST["First"]."  ".$_POST["Initial"]."  ".$_POST["Last"];
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");?>
<?php 
	$cookie_dob = "Date_of_Birth";
	$cookie_dobv = $_POST["bdaymonth"];
	setcookie($cookie_dob, $cookie_dobv, time() + (86400 * 30), "/");?>
<?php 
$addr="Full_Address";
$addv=$_POST["add1"].$_POST["add2"].",".$_POST["city"].",".$_POST["state"]."-".$_POST["code"];
	setcookie($addr,$addv, time()+36000); ?>
	<?php 
$city="City";
$citv=$_POST["city"];
	setcookie($city,$citv, time()+36000); ?>
	<?php 
$state="State";
$statv=$_POST["state"];
	setcookie($state,$statv, time()+36000); ?>
	<?php 
$gender="Gender";
$gendv=$_POST["ge2"];
	setcookie($gender,$gendv, time()+36000); ?>
	<?php 
$age="Age";
$agev=$_POST["range"];
	setcookie($age,$agev, time()+36000); ?>
<html>
	<body style="font-family:Arial">
		<?php echo "Radio: ".$_POST["gen"]; ?><br>
		<?php echo "First Name: ".$_POST["First"]; ?><br>
		<?php echo "Initial: ".$_POST["Initial"]; ?><br>
		<?php echo "Last Name: ".$_POST["Last"]; ?><br>
		<?php echo "Your DOB is: ".$_POST["bdaymonth"]; ?><br>
		<?php echo "Your Address is: ".$_POST["add1"].$_POST["add2"]; ?><br>
		<?php echo "City is: ".$_POST["city"]; ?><br>
		<?php echo "State: ".$_POST["state"]; ?><br>
		<?php echo "Pin code: ".$_POST["code"]; ?><br>
		<?php echo "Sex: ".$_POST["ge2"]; ?><br>
		<?php echo "Relation: ".$_POST["gen1"]; ?><br>
		<?php echo "Range: ".$_POST["range"]; ?><br>
		<?php if(!isset($_COOKIE[$radio])) {
			    echo "Cookie named '" . $radio . "' is not set!";
			} else {
			    echo "Cookie '" . $radio . "' is set!<br>";
			    echo "Value is: " . $_COOKIE[$radio];
			}
			?><br>
		<?php if(!isset($_COOKIE[$cookie_name])) {
			    echo "Cookie named '" . $cookie_name . "' is not set!";
			} else {
			    echo "Cookie '" . $cookie_name . "' is set!<br>";
			    echo "Value is: " . $_COOKIE[$cookie_name];
			}
			?><br>
		<?php if(!isset($_COOKIE[$cookie_dob])) {
    echo "Cookie named '" . $cookie_dob . "' is not set!";
} else {
    echo "Cookie '" . $cookie_dob . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_dob];
}
?><br>
	<?php if(!isset($_COOKIE[$addr])) {
    echo "Cookie named '" . $addr . "' is not set!";
} else {
    echo "Cookie '" . $addr . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$addr];
}
?><br>
<?php if(!isset($_COOKIE[$city])) {
    echo "Cookie named '" . $city . "' is not set!";
} else {
    echo "Cookie '" . $city . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$city];
}
?><br>
<?php if(!isset($_COOKIE[$state])) {
    echo "Cookie named '" . $state . "' is not set!";
} else {
    echo "Cookie '" . $state . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$state];
}
?><br>
<?php if(!isset($_COOKIE[$gender])) {
    echo "Cookie named '" . $gender . "' is not set!";
} else {
    echo "Cookie '" . $gender . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$gender];
}
?><br>
<?php if(!isset($_COOKIE[$age])) {
    echo "Cookie named '" . $age . "' is not set!";
} else {
    echo "Cookie '" . $age . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$age];
}
?><br>
	</body>
</html>

