<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php">Strona główna</a>
<?php
    echo ("<br>"."<br>"."<br>");
    echo("jestes w delete.php <br>");

echo $_POST['id'];

require_once("connect.php");

$sql = "DELETE FROM pracownicy WHERE id_pracownicy=".$_POST['id'];
echo ("<br>");
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
  </body>
</html>
