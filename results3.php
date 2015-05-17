<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<?php
	
	
			$con = mysqli_connect("db534868867.db.1and1.com","dbo534868867","LearningIsFun28","db534868867");
			
			/*$result = mysqli_query($con, "SELECT * FROM Results");*/
			
			/*while($row = mysqli_fetch_array($result))
			{
				//echo $row['FirstName'] . " " . $row["LastName"];
				echo $row['FirstName'] . "<br>" . $row["LastName"] . "<br>" . $row["Age"] . "<br>" . $row["Address"] . "<br>" . $row["City"] . "<br>" . $row["State"] . "<br>" . 
				$row["Zip"];
				
				echo "<br>";
				
			}*/
			
			$result = mysqli_query($con, "DELETE FROM Results");
			
			/*$result= mysqli_query($con, "SELECT * FROM Results");*/
			
			mysqli_close($con);
			
			?>
			
</body>
</html>
