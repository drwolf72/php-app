<!DOCTYPE HTML>
<html>
<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<title> Simple PHP/MySQL page</title>
		<link rel="stylesheet" type="text/css" href = "bootstrap.css"  media="screen"  />
		<link rel="stylesheet" type="text/css" href = "main.css"  media="screen"  />
			
		
</head>
<body>
	
	<div id="main">
	
			<div id="title">
				<h1>Welcome to a simple Survey</h1>
			</div>

		<div class="container">
				
			
			<form action="results.php" method="post">
			 <div class="row top-buffer">
				<div class="row1">
				<div class="col-md-3">
				<label>First Name</label>
				</div>
				<div class="col-md-3">
				<input id="fn" type="text" name="firstname" /><br>
				</div>
				<div class="col-md-3">
				<label>Last Name</label>
				</div>
				<div class="col-md-3">
				<input id="ln" type="text" name="lastname"/><br>
				</div>
			
				</div>
			</div>
			<div class="row top-buffer">
				<div class="row2">
				<div class="col-md-3">
				<label>Age</label>
				</div>
				<div class="col-md-3">
				<input id="age" type="text" size="2" name="age" /> <br>
				</div>
				<div class="col-md-3">
				<label>Address</label>
				</div>
				<div class="col-md-3">
				<input id="addy" type="text" name="address" /> <br>
				</div>
				
			</div>
			
				<div class="row3">
				</div>
			</div>
			<div class="row top-buffer">

	
				<div class="col-md-3">
				<label>City</label> <!--<input id="city" type="text" name="city" />-->  <br>
				</div>
				<div class="col-md-3">
				<input id="city" type="text" name="city" />  <br>
				</div>
				<div class="col-md-3">
				<label>State</label>
				</div>
				<div class="col-md-3">
				<input id="state" type="text" size="2" name="state" /> <br>
				</div>
			</div>
			
			
			<div class="row top-buffer">
				<div class="row4">
				<div class="col-md-3">
				<label>Zip</label>
				</div>
				<div class="col-md-3">
				<input id="zip" type="text" name="zip" /> <br>
				</div>
				<div class="col-md-3">
				<label>Email</label>
				</div>
				<div class="col-md-3">
				<input id="email" type="text" name="email" /> <br>
				</div>
				</div>
			</div>
				
				Gender <br>
				Male <input type="radio" name="gender" /> Female <input type="radio" name="gender" /><br>
				
				
				Do you rent or own</br>
				<select><option name="rent" value="rent">Rent</option><option name="own" value="own">Own</option></select><br>
			
				What Products are you interested in?<br>
				<select id="first-choice">
					<option selected value="base">Please select</option>
					<option value="cellphones">Cell Phones</option>
					<option value="technologies">Other technologies<option>
				</select>
				<select id="second-choice">
					<option>please select from above</option>
				</select>
				
				<input type="submit">
			</form>
		

		</div>
		
	</div>
	
	
			<script>
				$("#first-choice").change(function() {
					$("#second-choice").load("textdata/" + $(this).val() + ".txt");
					
				});
				
			</script>
			

				
				
				
			
			<?php
			
				$con = mysqli_connect("db534868867.db.1and1.com","dbo534868867","LearningIsFun28","db534868867");
				
					if (mysqli_connect_errno()) {
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				
				
				
				

				//$sql = "CREATE TABLE Results(FirstName CHAR(30), LastName CHAR(30), Age INT, Address CHAR(30), City CHAR(45), State CHAR(2), Zip INT)";
				//$sql = "ALTER TABLE Results ADD Email VARCHAR(50)";
				

				/*if (mysqli_query($con, $sql))
				{
					//echo "results database successfully made";
					echo "email column added successfully";
				}
				else
				{
					echo "error creating table" . mysqli_error($con);
					
				}*/
				
					
			
				
			
			
			
			
			?>









</body>
<footer>
</footer>
</html>
