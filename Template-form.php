<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Template-Form</title>
	<!-- <link rel="stylesheet" href="Template-form.css"> -->
	<!--PT SANS Google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	<!-- PT SANS Google font -->
	<!--option values styling format-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
	<!--option values styling format-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

	<script>
  	// Wait for the DOM to be ready
  	document.addEventListener('DOMContentLoaded', function() {
    // Initialize Select2 on the custom-select class
    $('.custom-select').select2();
  	});
	</script>

	<style>
		.container
		{
			margin: 0 auto;
			padding: 0;
			width: 40%;
			border: 1px solid black;
			background-color: #f7fafa;
			font-family: 'PT Sans', sans-serif;
		}

		.container h3, p
		{
			text-align: center;
		}

		.design
		{
			margin-left: 15px;
			width: 90%;
		}
		.sub_mit
		{
			padding: 8px;
			width: 95%;
			background-color: green;
			color: #fff;
		}

		.Status
		{
			margin-left:15px;
		}

		select option:hover
		{
			color: #fff;
			background-color: lightblue;
		}
	</style>
</head>
<body>
	<img src="logo.jpg" style="margin: 100px 650px;" width="100px" height="auto">
		<div class="container">
			<form method="post" action="Data_submit.php">
				<h3>W3Schools Bootcamp - Request Info</h3>
				<p>Please provide your details below,and we will send you a PDF of the program Outline to your email</p>
				<label class="design" for="input_1">Name</label>
				<br>
				<input type="text" class="design" name="input_1" id="input_1">
				<br>
				<br>

				<label for="input_2" class="design">Email</label>
				<br>
				<input type="email" class="design" name="input_2" id="input_2">
				<br>
				<br>

				<label class="design custom-select">Your Location</label>
				<br>
				<select name="select_1" id="select_1" class="design">
					<option value="None">--Select from dropdown--</option>
					<option value="North America">North America</option>
					<option value="Latin America">Latin America</option>
					<option value="UK and Europe">UK and Europe</option>
					<option value="Asia and Pacific">Asia and Pacifi</option>
					<option value="Middle East">Middle East</option>
					<option value="Africa">Africa</option>
				</select>
				<br>
				<br>

				<label class="design custom-select">Interest</label>
				<br>
				<select name="select_2" id="select_2" class="design">
					<option value="None">--Select from dropdown--</option>
					<option value="Web Development 24 Week Bootcamp">Web Development 24 Week Bootcamp</option>
					<option value="HTML and CSS Mini Bootcamp">HTML and CSS Mini Bootcamp</option>
					<option value="Javascript Mini Bootcamp">Javascript Mini Bootcamp</option>
					<option value="Front End with Reactjs Mini Bootcamp">Front End with Reactjs Mini Bootcamp</option>
					<option value="Back End with Nodejs Mini Bootcamp">Back End with Nodejs Mini Bootcamp</option>
					<option value="DevOps Mini Bootcamp ">DevOps Mini Bootcamp</option>
					<option value="Python Fundamentals Mini Bootcamp">Python Fundamentals Mini Bootcamp</option>
					<option value="Python for Data Science Mini Bootcamp">Python for Data Science Mini Bootcamp</option>
					<option value="SQL Mini Bootcamp">SQL Mini Bootcamp</option>
					<option value="All of the above/Not sure">All of the above/Not sure</option>
				</select>
				<br>
				<br>

				<input type="checkbox" name="checkbox" value="Agreed" class="Status">Yes,I would like to receive emails,offers or promotions by email
				<br>
				<br>
				<input type="submit" value="submit" class="design sub_mit" name="submit">
				<p>Never share sensitive information(credit card numbers,social security numbers,passwords through this form)</p>
			</form>
		</div>
</body>
</html>