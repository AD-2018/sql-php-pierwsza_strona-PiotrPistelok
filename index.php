<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-PiotrPistelok">GitHub</a>
<div class="nav">
    <a href="OrgPacownicy.php">Organizacja Pracownicy</a><br>
    <a href="agreg.php">Funkcje Agregujące</a>
</div>
</body>
</html>
<?php
require_once("connect.php");

echo("<br>Zad 1 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<br>"."ok";
    } else {
      echo "Error: " . $sql . "<li>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 2 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
echo("<br>Zad 3 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie not like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
echo("<br>Zad 1 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
echo("<br>Zad 1 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

?>


