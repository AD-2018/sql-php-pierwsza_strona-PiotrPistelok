
<?php
echo("jestes w insert.php");
echo $_POST['name'];

$servername = "remotemysql.com";
$username = "i1g6dVaV2H";
$password = "FLyEk1xoGO";
$dbname = "i1g6dVaV2H";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null,'".$_POST['imie']."', 1, 80,'1992-11-21')";
echo ("ok");
echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

