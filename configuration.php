<?php 

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "form_details";

$conn = new mysqli($servername,$username,$password,$databasename);

if($conn->connect_error)
{
	echo "<script>alert('Connection lost');</script>";
}

else
{
	echo "<script>alert('connection successfull');</script>";
}

?>