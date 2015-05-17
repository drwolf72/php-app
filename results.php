<!DOCTYPE html>
<html>
<head>
	
		<title>Results</title>
		<link rel="stylesheet" type="text/css" href = "bootstrap.css"  media="screen"  />
		
</head>
<body>

	<!--<button><a href="results3.php">See what you typed!</a></button>-->
	<button><a href="results3.php">Delete</a></button>
	<button class="btn btn-default"><a href="index.php">Home Page</a></button>

	<div id="main">
			
			<div id="title">
				<h1>Results</h1>
			</div>
			
		
	
	
	
	<?php
	
		
	
	
		$con = mysqli_connect("db534868867.db.1and1.com","dbo534868867","LearningIsFun28","db534868867");
		
				/*if (mysqli_connect_errno()) {
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}*/
				
		
		$firstname = mysqli_real_escape_string($con, $_POST["firstname"]);
		$lastname = mysqli_real_escape_string($con, $_POST["lastname"]);
		$age = mysqli_real_escape_string($con, $_POST["age"]);
		$address = mysqli_real_escape_string($con, $_POST["address"]);
		$city = mysqli_real_escape_string($con, $_POST["city"]);
		$state = mysqli_real_escape_string($con, $_POST["state"]);
		$zip = mysqli_real_escape_string($con, $_POST["zip"]);
		$email = mysqli_real_escape_string($con, $_POST["email"]);


		if (empty($age))
		{

			echo "nothing entered into form<br>";
		}
		else
		{
		
				$sql = "INSERT INTO Results (FirstName, LastName, Age, Address, City, State, Zip, Email)
				VALUES ('$firstname', '$lastname', '$age', '$address', '$city', '$state', '$zip', '$email')";
				
				if (!mysqli_query($con,$sql)) {
					die('Error: ' . mysqli_error($con));
				}
				echo "1 record added";
				echo "<br>";

		}


		
		
		
		
		mysqli_close($con);
		
		?>
		
		
		
		
		
			<?php
	
	
	
			

	
			$con = mysqli_connect("db534868867.db.1and1.com","dbo534868867","LearningIsFun28","db534868867");
			
			/*$result = mysqli_query($con, "DELETE * FROM Results");*/
			
			/*$result = mysqli_query($con, "SELECT * FROM Results");*/
			
			/*$result = mysqli_query($con, "SELECT * FROM Results");*/
			
			/*$result = mysqli_query($con, "SELECT * FROM Results");*/
			
			/*$result = mysqli_query($con, "DELETE * FROM Results");*/
			
			/*$result  =  mysqli_query($con, "SELECT * FROM Results");*/
			
			 /*$result = mysqli_query($con, "DELETE * FROM Results");*/
			 
			 
			





						 $result = mysqli_query($con, "SELECT * FROM Results");


						
						//$result = mysqli_query($con, "DELETE FROM Results");
						
						while($row = mysqli_fetch_array($result))
						{
							//echo $row['FirstName'] . " " . $row["LastName"];
							echo "Your first name is: " . $row['FirstName'] . "<br> Your last name is:" . $row["LastName"] . "<br> Your age is:" . $row["Age"] . "<br> Your address is" . $row["Address"] . "<br> Your city is" . $row["City"] . "<br> Your state is:" .  $row["State"] . "<br> Your zip code is:" . $row["Zip"] . "<br> Your email is:" . $row["Email"];
							echo "<br>";
							
							

						}
						

			

			
	
			
		
			
			mysqli_close($con);
			
			?>
		
			<!--your gender is <?php //echo $_POST["gender"]; ?> <br>-->
			

			
			
			
		