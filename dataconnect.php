<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$q = $_REQUEST["q"];

$n = $_REQUEST["n"];
//$n = mysql_real_escape_string($n);

echo "{$n} en {$q}" ;
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
echo "Connected successfully";

$sql = "INSERT INTO score (name, score)
VALUES ('{$n}', $q)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();



?>


</body>
</html>