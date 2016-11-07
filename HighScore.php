<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="HighScore.css" />
	<title>Teacher Survival HighScore</title>
</head>
<body>

	<?php
	$servername = "eu-cdbr-azure-west-d.cloudapp.net";
	$username = "b854fea3f26f48";
	$password = "3fd6ee20";
	$dbname = "bdbdsrlqsym";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully";
	$sql = "SELECT name, score FROM score ORDER BY score DESC LIMIT 5";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "<div id=\"highscore-table\" class=\"clear\">";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<div class=\"user\"> <h3>" . $row["name"]. "<span>" . $row["score"]. "</td>" . "</span> </h3> </div>";
		}
		echo "</div";
	} else {
		echo "0 results";
	}
	$conn->close();
	?>


</body>
</html>