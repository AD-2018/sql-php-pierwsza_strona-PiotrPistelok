<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../../style.css">
<title>Piotr Pistelok</title>
</head>
<body>
    <a href="../../index.php">Strona główna</a>
    <a href="index1.php">Powrót</a>
<?php
echo ("<br>"."<br>");
require_once("../connect.php");

$sql = "DELETE FROM Firma_projekt WHERE id=".$_POST['id'];
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo ("<br>"."Projekt został usunięty.");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
  </body>
</html>