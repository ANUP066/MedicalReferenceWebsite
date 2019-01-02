<?php 
	session_start();
	$fullname = "";
	$email    = "";
	$phone="";
	$location="";
	$feedbacks ="";
	$errors = array(); 
	$_SESSION['success'] = "";

	$db = mysqli_connect('localhost', 'root', '', 'feedback');
	if (isset($_POST['feedb'])) {
		
		$fullname = mysqli_real_escape_string($db, $_POST['fn'].$_POST['ln']);
		$email = mysqli_real_escape_string($db, $_POST['em']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$location = mysqli_real_escape_string($db, $_POST['loc']);
		$feedbacks = mysqli_real_escape_string($db, $_POST['fed']);

		
		if (empty($fullname)) { array_push($errors, "Name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($phone)) { array_push($errors, "Phone no is required"); }
		if (empty($location)) { array_push($errors, "Location is required"); }
		if (empty($feedbacks)) { array_push($errors, "Feedback is required"); }
		if(strcmp($_POST["pagename"],$_POST["vrf"])!=0){
		$_POST["vrf"]="NULL";
		array_push($errors, "Verification code is incorrect.Enter Again");
		}
		$a = $_POST["em"];
		if (strpos($a, '@gmail.com') === false) {
			$_POST["em"]="NULL";
			array_push($errors, "Email format is incorrect.Enter Again");
		}
		if (count($errors) == 0) {
			$query = "INSERT INTO mystore(NAME,EMAIL,PHONE,LOCATION,TEXTAREA)
					  VALUES('$fullname', '$email', '$phone','$location','$feedbacks')";
			mysqli_query($db, $query);
		}
		
	}
?>
