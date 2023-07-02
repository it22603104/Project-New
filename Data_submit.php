<?php
require 'configuration.php';

if(isset($_POST['submit']))
{
	$name = $_POST['input_1'];
	$email = $_POST['input_2'];
	$location = $_POST['select_1'];
	$interest = $_POST['select_2'];
	$Agreetermsstatus = $_POST['checkbox'];

	$sql = "INSERT INTO template_details VALUES('$name','$email','$location','$interest','$Agreetermsstatus')";

	//$conn->query($sql);

	if($conn->query($sql))
	{
		echo "<script>alert('Data Inserted');</script>";
		header('Location:Template-form.php');
	}

	else
	{
		echo "<script>alert('Data not inserted');</script>";
	}
}

else
{
	echo "<script>alert('Data not submitted');</script>";
}

?>