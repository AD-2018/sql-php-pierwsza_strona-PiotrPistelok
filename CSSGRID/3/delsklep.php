<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../../style.css">
<title>Piotr Pistelok</title>
</head>
<body>
    <ul class="nav1">
        <li class="nav1_link"> <a class="link" href="../../index.php">Menu</a></li>
        <li class="nav1_link"> <a class="link" href="index3.php">Powrót</a></li>
    </ul>
<?php
echo ("<br>"."<br>");
require_once("../../connect.php");

$sql = "DELETE FROM Sklep WHERE id_sklep=".$_POST['id'];
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo ("<br>"."Usunięto.");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
  </body>
</html>