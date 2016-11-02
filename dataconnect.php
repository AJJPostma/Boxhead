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
echo "Connected successfully";

$conn->close();
?>

<form action="action_page.php">
    name:<br>
    <input type="text" name="htmlname" value="">
    <br>
    score:<br>
    <input type="text" name="htmlscore" value="">
    <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>