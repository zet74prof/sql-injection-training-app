<?php
// Create connection
$DBUSER = 'root';
$DBPASS = '5MichelAnnecy';

$con=mysqli_connect("127.0.0.1",$DBUSER,$DBPASS,"sqlitraining");

// Check connection
if (mysqli_connect_errno())
  {
  echo "<font style=\"color:#FF0000\">Could not connect:". mysqli_connect_error()."</font\>";
  }
?>