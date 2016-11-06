<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

$servername = "eu-cdbr-azure-west-d.cloudapp.net:3306";
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
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - score: " . $row["score"]. " " . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>


</body>
</html>