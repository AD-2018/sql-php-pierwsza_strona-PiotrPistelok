<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-PiotrPistelok">GitHub</a>
    <h2>Piotr Pistelok nr 9</h2>
<div class="nav">
    <a href="../index.php">Strona główna</a>
    <a href="OrgPracownicy.php">Organizacja Pracownicy</a>
    <a href="Pracownicy.php">Pracownicy</a>
    <a href="agreg.php">Funkcje Agregujące</a>
    <a href="Data_czas.php">Data i czas</a>
</div>
    <h2>Jestem w Książki</h2>

<?php
require_once("../connect.php");



echo("<br>Autorzy<br>");
$sql = "SELECT * FROM biblAutor";
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<select name="Autor">');
    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_autor'].'">';
        echo($row['autor']);
        echo"</option>"; 
    }
echo('</select><br>');

echo("<br>Tytuły<br>");
$sql = "SELECT * FROM biblTytul";
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<select name="Tytul">');
    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_tytul'].'">';
        echo($row['tytul']);
        echo"</option>"; 
    }
echo('</select><br>');
    

echo("<br>WSZYSTKO<br>");
$sql = "SELECT id_book, autor, tytul FROM bibl_book, biblTytul, biblAutor WHERE biblTytul.id = bibl_book.biblTytul_id AND biblAutor.id = bibl_book.biblAutor_id";
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Id</th><th>Autor</th><th>Tytuł</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_book'].'</td><td>'.$row['autor'].'</td><td>'.$row['tytul'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
?>
</body>
</html>
