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
            <h2>Piotr Pistelok nr 9</h2>
        </div>
    </div>
    <div class="nav">
        <?php include_once("../menu2.php");?>
    </div>
    <div class="strona">
    <h2>Jestem w Organizacja,pracownicy</h2>
<?php
require_once("../connect.php");

echo("<br>Pracownicy z nazwą działów<br>");
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

echo("<br>Pracownicy tylko z działów 1 i 4<br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and (dzial=1 or dzial=4)";
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

echo("<br>Lista kobiet z nazwami działów<br>");
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

echo("<br>Lista mężczyzn z nazwami działów<br>");
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

echo("<h3> SORTOWANIE </h3>");

echo("<br>Pracownicy posortowani malejąco<br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial order by imie desc";
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

echo("<br>Pracownicy z działu 3 posortowani rosnąco po imieniu<br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and dzial=3 order by imie asc";
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

echo("<br>Kobiety posortowane rosnąco po imieniu<br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie like '%a' order by imie asc";
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

echo("<br>Kobiety z działu 1 i 3 posortowane rosnąco po zarobkach<br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and (imie like '%a') and (dzial=1 or dzial=3) order by imie asc";
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

echo("<br>Mężczyźni posortowani rosnąco: po nazwie działu a następnie po wysokości zarobków<br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie not like '%a' order by nazwa_dzial asc, zarobki asc";
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
    </div>
</body>
</html>

