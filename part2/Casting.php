<?php print( '<?xml version = "1.0" encoding = "utf-8"?>' ) ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

 <!-- Fig. 23.3: data.php -->
 <!-- Data type conversion. -->
 <html xmlns = "http://www.w3.org/1999/xhtml">
 <head>
 <title>Data type conversion</title>
 </head>
 <body>
 <?php
 // declare a string, double and integer
$testString = "3.5 seconds";
$testDouble = 79.2;
$testInteger = 12;



 ?><!-- end PHP script -->

 <!-- print each variable’s value and type -->
 <?php
 print( "$testString is a(n) " . gettype( $testString ). "<br />");
print( "$testDouble is a(n) " . gettype( $testDouble )
 . "<br />" );
 print( "$testInteger is a(n) " . gettype( $testInteger)
 . "<br />" );
 ?><!-- end PHP script -->
 <br />
 converting to other data types:<br />
 <?php
 // call function settype to convert variable
 // testString to different data types

print( "$testString" );
settype( $testString, "double" );
print( " as a double is $testString <br />" );

 print( "$testString" );
settype( $testString, "integer" );
print( " as an integer is $testString <br />" );

settype( $testString, "string" );
print( "converting back to a string results in
 $testString <br /><br />" );

 // use type casting to cast variables to a different type

$data="98.6 degrees";

//print( "before casting, $data is a " );
gettype(( $data ) . "<br /><br />" );

 print( "using type casting instead: <br />as a double: " . (double) $data ."</br/>as an integer:".(integer)$data);

print( "<br /><br />after casting, $data is a " .
 gettype( $data ) );
 ?><!-- end PHP script -->
 </body>
 </html>


