<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
<title>Piotr Pistelok</title>
</head>
<body>
    <div class="container">
        <div class="tytul">
            <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-PiotrPistelok">GitHub</a>
            <div class="imie">
            <h2>Piotr Pistelok nr 9</h2>
        </div>
    </div>
    <div class="nav">
        <?php include_once("../menu2.php");?>
    </div>
    <div class="strona">
    <h2>Jestem w Funkcjach agregujących</h2>
<?php
require_once("../connect.php");

echo("<br>Suma zarobków wszystkich pracowników<br>");
$sql = "SELECT sum(zarobki) as suma_zarobków FROM pracownicy, organizacja where id_org=dzial;";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>suma zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>Suma zarobków wszystkich kobiet<br>");
$sql = "SELECT sum(zarobki) as suma_zarobków FROM pracownicy, organizacja where id_org=dzial and imie like '%a'";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>suma zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');


echo("<br>Suma zarobków mężczyzn pracujących w dziale 2 i 3<br>");
$sql = "SELECT sum(zarobki) as suma_zarobków FROM pracownicy, organizacja where id_org=dzial and dzial in (2,3) and imie not like '%a'";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>suma zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>Średnia zarobków pracowników z działu 4<br>");
$sql = "SELECT avg(zarobki) as średnia_zarobków FROM pracownicy, organizacja where id_org=dzial and dzial=4";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>średnia zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['średnia_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>Średnia zarobków mężczyzn z działu 1 i 2<br>");
$sql = "SELECT avg(zarobki) as średnia_zarobków FROM pracownicy, organizacja where id_org=dzial and dzial in (1,2) and imie not like '%a'";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Średnia zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['średnia_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>Ilu jest pracowników<br>");
$sql = "SELECT count(imie) as liczba_pracowników FROM pracownicy, organizacja where id_org=dzial";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Liczba pracowników</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['liczba_pracowników'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>Ile kobiet pracuje łącznie w działach 1 i 3<br>");
$sql = "SELECT count(imie) as liczba_pracowników FROM pracownicy, organizacja where id_org=dzial and dzial in (1,3) and imie like '%a'";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Liczba pracowników</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['liczba_pracowników'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<h3> GROUP BY </h3>");

echo("<br>Suma zarobków w poszczególnych działach<br>");
$sql = "SELECT dzial,sum(zarobki) as suma_zarobków FROM pracownicy, organizacja where id_org=dzial group by dzial";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Dzial</th><th>Suma zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['suma_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>Ilość pracowników w poszczególnych działach<br>");
$sql = "SELECT dzial,count(imie) as ilość_pracowników FROM pracownicy, organizacja where id_org=dzial group by dzial";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Dzial</th><th>Ilość pracowników</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['ilość_pracowników'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>Średnie zarobki w poszczególnych działach<br>");
$sql = "SELECT dzial,avg(zarobki) as średnie_zarobki FROM pracownicy, organizacja where id_org=dzial group by dzial";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Dzial</th><th>Średnie zarobki</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['średnie_zarobki'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>Suma zarobków kobiet i mężczyzn<br>");
$sql = "SELECT dzial,sum(zarobki) as suma_zarobków FROM pracownicy, organizacja where id_org=dzial group by dzial ";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Dzial</th><th>Suma zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['suma_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
?>
    </div>
</body>
</html>





