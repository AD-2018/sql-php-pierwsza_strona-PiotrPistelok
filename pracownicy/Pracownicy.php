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
    <a href="agreg.php">Funkcje Agregujące</a>
    <a href="Data_czas.php">Data i czas</a>
</div>
    <h2>Jestem w Pracownicy</h2>

<?php
require_once("../connect.php");

echo("<br>Pracownicy tylko z działu 2<br>");
$sql = "SELECT * FROM pracownicy where dzial=2";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>Pracowicy z działu 2 i 3<br>");
$sql = "SELECT * FROM pracownicy where (dzial=2) or (dzial=3)";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>Pracownicy z zarobkami mniejszymi niż 30<br>");
$sql = "SELECT * FROM pracownicy where zarobki<30";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
?>
</body>
</html>

