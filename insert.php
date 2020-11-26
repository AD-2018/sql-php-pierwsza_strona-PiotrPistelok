<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php">Strona główna</a>
<?php
echo("<br>"."<br>");
echo("DODAŁEŚ PRACOWNIKA<br>");
echo "<li>". $_POST['imie'];
echo "<li>". $_POST['dzial'];
echo "<li>". $_POST['zarobki'];
echo "<li>". $_POST['data_urodzenia'];

require_once("connect.php");


$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null, '".$_POST['imie']."', '".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";
echo ("<br>");
echo ("ok");
echo ("<br>");

echo $sql;
if ($conn->query($sql) === TRUE) {
  echo ("<br>"."Pracownik został pomyślnie dodany.");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
       </body>
</html>

