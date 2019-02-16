<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$firstName = $_POST['first_name'];
		$lastName = $_POST['last_name'];
		$carBrand = $_POST['car_brand'];
		$carModel = $_POST['car_model'];
		$year = $_POST['year'];
		$color = $_POST['color'];
		$fuel = $_POST['fuel'];

		


		$serverName = "localhost";
		$userName = "root";
		$password = "";
		$dbName = "admin";

		$conn = new mysqli($serverName, $userName, $password, $dbName);
		if($conn -> connect_error) {
			die("Connection failed".$conn->connect_error);
		}

		$query = mysqli_query($conn, 'SELECT * FROM masini');

		
		mysqli_close($conn);
		

	?>
	<table id="masini">
		<tr>
			<th>ID</th>
			<th>First Names</th>
			<th>Last Names</th>
			<th>Car Brand</th>
			<th>Car Model</th>
			<th>Manufactured</th>
			<th>Color</th>
			<th>Fuel</th>
		</tr>
	
	<?php 
	while ($row = mysqli_fetch_array($query)) {
		echo "<tr>";
			echo "<td>".$row['ID']."</td>";
			echo "<td>".$row['prenume']."</td>";
			echo "<td>".$row['nume']."</td>";
			echo "<td>".$row['marca']."</td>";
			echo "<td>".$row['model']."</td>";
			echo "<td>".$row['an']."</td>";
			echo "<td>".$row['culoare']."</td>";
			echo "<td>".$row['combustibil']."</td>";
		echo "</tr>";
		}

	 ?>
	 </table>
</body>
</html></html>