<!DOCTYPE html>
<html>
<head>
	<title>info</title>
</head>
<body>
<?php
	$file=fopen("get.txt","w");
	$name=array();
	$name[0]=$_POST["Fname"];
	$name[1]=$_POST["Lname"];
	$n=implode(" ", $name);
	$e=$_POST["email"];
	$s=$_POST["sub"];
	$m=$_POST["message"];
	fwrite($file, $n);
	fwrite($file, "\n");
	fwrite($file, $e);
	fwrite($file, "\n");
	fwrite($file, $s);
	fwrite($file, "\n");
	fwrite($file, $m);
	fclose($file);
	header("location:contact.html")
?>

</body>
</html>