  
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
?>
</body>
</html>
