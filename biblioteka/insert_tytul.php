<?php
echo("jestes w insert_tytul.php");
echo "<li>".$_POST['tytul'];

require_once("../connect.php");

$sql = "INSERT INTO bibl_tytul (id_tytul, tytul) 
       VALUES (null, '".$_POST['tytul']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: https://phppistelok.herokuapp.com/biblioteka/ksiazki.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>