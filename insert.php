<?php
echo ("jestes w insert.php");
echo $_POST['name'];

$servername = "remotemysql.com";
$username = "i1g6dVaV2H";
$password = "FLyEk1xoGO";
$dbname = "i1g6dVaV2H";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Pracownik (null, "$_POST['name']", dzial, zarobki) 
       VALUES (null,'Adrian', 3, 20,'1999-11-21')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//informacja o ewentualnych błędach
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
