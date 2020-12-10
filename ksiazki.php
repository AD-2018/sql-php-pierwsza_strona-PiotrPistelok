<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-PiotrPistelok">GitHub</a>
    <h2>Piotr Pistelok nr 9</h2>
<div class="nav">
    <a href="index.php">Strona główna</a>
    <a href="OrgPracownicy.php">Organizacja Pracownicy</a>
    <a href="Pracownicy.php">Pracownicy</a>
    <a href="agreg.php">Funkcje Agregujące</a>
    <a href="Data_czas.php">Data i czas</a>
</div>
    <h2>Jestem w Książki</h2>

<?php
require_once("connect.php");

echo('<label for="bibl_autor">Wybierz autora:</label>');
echo('<select id="bibl_autor">');
    echo('<option value="id_autor"></option>');
    echo('<option value="autor"></option>');
echo('</select>');

echo("<br>Autorzy<br>");
$sql = "SELECT * FROM biblAutor";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Id</th><th>Autor</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['autor'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>Tytuły<br>");
$sql = "SELECT * FROM biblTytul";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
   echo('<th>Id</th><th>Tytuł</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['tytul'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>WSZYSTKO<br>");
$sql = "SELECT id_book, autor, tytul FROM bibl_book, biblTytul, biblAutor WHERE biblTytul.id = bibl_book.biblTytul_id AND biblAutor.id = bibl_book.biblAutor_id";
echo($sql);
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
