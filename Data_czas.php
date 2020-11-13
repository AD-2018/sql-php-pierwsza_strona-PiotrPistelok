  
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
</div>
    <h2>Jestem w Data i czas</h2>

<?php
require_once("connect.php");
     
echo("<br>Wiek poszczególnych pracowników (w latach)<br>");
$sql ="select *,YEAR(curdate())-YEAR(data_urodzenia) AS wiek from pracownicy,organizacja where id_org=dzial";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Imie</th><th>Dział</th><th>Wiek</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['dzial'].'</td><td>'.$row['wiek'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
  
  echo("<br>Wiek poszczególnych pracowników (w latach) z działu serwis<br>");
$sql ="select *,YEAR(curdate())-YEAR(data_urodzenia) AS wiek from pracownicy,organizacja where id_org=dzial and dzial=1";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Imie</th><th>Dział</th><th>Wiek</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['dzial'].'</td><td>'.$row['wiek'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
  
  echo("<br>Suma lat wszystkich pracowników<br>");
$sql ="select SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial"; 
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Suma lat</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo("<td>".$row['Suma']."</td>");     
        echo('</tr>');
    }
    echo('</table>');
  
  echo("<br>Suma lat pracowników z działu handel<br>");
$sql ="select SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial and dzial=2";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Suma lat');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo("<td>".$row['Suma']."</td>");     
        echo('</tr>');
    }
    echo('</table>');
  
  echo("<br>Suma lat kobiet<br>");
    $sql ="select SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial and imie like'%a'"; 
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Suma lat</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo("<td>".$row['Suma']."</td>");
        echo('</tr>');
    }
    echo('</table>');
  
    echo("<br>Suma lat mężczyzn<br>");
$sql ="select SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial and imie not like'%a'"; 
  echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Suma lat</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo("<td>".$row['Suma']."</td>");
        echo('</tr>');
    }
    echo('</table>');
  
    echo("<br>Średnia lat pracowników w poszczególnych działach(wraz z wypisanymi nazwami działów)<br>");
$sql ="select dzial,nazwa_dzial,AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia from pracownicy,organizacja where id_org=dzial group by dzial,nazwa_dzial";
  echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Dział</th><th>Nazwa Działu</th><th>Średnia lat</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo("<td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['srednia']."</td>");  
        echo('</tr>');
    }
    echo('</table>');
  
    echo("<br>Suma lat pracowników w poszczególnych działach<br>");
    $sql ="select dzial,nazwa_dzial,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma from pracownicy,organizacja where id_org=dzial group by dzial,nazwa_dzial"; 
  echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Dział</th><th>Nazwa Działu</th><th>Suma</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo("<td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['suma']."</td>");  
        echo('</tr>');
    }
    echo('</table>');
  
    echo("<br>Najstarsi pracownicy w każdym dziale (nazwa_dział, wiek)<br>");
    $sql ="select nazwa_dzial,MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
  echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Nazwa Działu</th><th>Wiek</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo("<td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");     
        echo('</tr>');
    }
    echo('</table>');
  
    echo("<br>Najmłodsi pracownicy z działu: handel i serwis (nazwa_dział, wiek)<br>");
    $sql ="select nazwa_dzial,MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and nazwa_dzial='handel' or nazwa_dzial='serwis' group by nazwa_dzial"; 
  echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Nazwa Działu</th><th>Wiek</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo("<td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");     
        echo('</tr>');
    }
    echo('</table>');
  
    echo("<br>Najmłodsi pracownicy z działu: handel i serwis (Imię, nazwa_dział, wiek)<br>");
    $sql ="select imie,nazwa_dzial,MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and imie not like '%a' group by imie,nazwa_dzial order by wiek desc limit 1"; 
  echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Imię</th><th>Nazwa Działu</th><th>Wiek</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");     
        echo('</tr>');
    }
    echo('</table>');
  
    echo("<br>Długość życia pracowników w dniach<br>");
    $sql ="select imie,DATEDIFF(CURDATE(),data_urodzenia) as wiek from pracownicy,organizacja where id_org=dzial"; 
  echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Imię</th><th>Długość życia (dni)</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td>");     
        echo('</tr>');
    }
    echo('</table>');
  
    echo("<br>Najstarszy mężczyzna<br>");
    $sql ="select imie,MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and imie not like '%a' group by imie order by wiek desc limit 1"; 
  echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Imię</th><th>Dział</th><th>Wiek</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo("<td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['wiek']."</td>");     
        echo('</tr>');
    }
    echo('</table>');
?>
</body>
</html>
