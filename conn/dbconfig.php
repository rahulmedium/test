<?php
/* $con = mysqli_connect("localhost","root","","sudzero");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
} */

$con = mysqli_connect("localhost","root","","wagers");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 
 
		
