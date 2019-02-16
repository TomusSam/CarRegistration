<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		
echo "<script type='text/javascript'>
alert('AM REUSIT!!! NU IMI VINE SA CRED CA AMERS! :))');
</script>";


		$serverName = "localhost";
		$userName = "root";
		$password = "";
		$dbName = "admin";

		$conn = new mysqli($serverName, $userName, $password, $dbName);
		if($conn -> connect_error) {
			die("Connection failed".$conn->connect_error);
		}

		$statement = $conn->prepare("INSERT INTO masini (prenume, nume, marca, model, an, culoare, combustibil) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$statement ->bind_param("ssssiss", $firstName, $lastName, $carBrand, $carModel, $year, $color, $fuel);
		$statement->execute();
		mysqli_close($statement);
		mysqli_close($conn);
		header('Location:cars.php');
		
?>
</body>
</html>