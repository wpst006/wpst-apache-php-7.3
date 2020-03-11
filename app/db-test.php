<?php
$dbhost = "ecs-db.crgc1xjgktao.ap-southeast-1.rds.amazonaws.com";
$dbname = "test_db";

$username = "admin";
$password = "globalC0n";

// Create connection
$conn = new mysqli($dbhost, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully.<br/>";

// sql to create table
$sql = "SELECT * FROM persons;";

try
{
  $result = $conn->query($sql);
  
  while($row=$result->fetch_assoc()){
	var_dump($row);
	echo "<br/>";
  }
}
catch (PDOException $e)
{
  $error = 'Error fetching jokes: ' . $e->getMessage();
}

$conn->close();

