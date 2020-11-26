
<?php
echo("jestes w insert.php");
echo $_POST['name'];

require_once("connect.php");

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

