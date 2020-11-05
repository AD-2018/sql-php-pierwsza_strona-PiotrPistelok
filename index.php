<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<link href="https://github.com/AD-2018/sql-php-pierwsza_strona-PiotrPistelok">github</a>
    <h1>Piotr Pistelok nr 9</h1>
<?php
include 'connect.php';
echo("<h3>ZAD.1</h3>");
$sql ="select * from pracownicy";
    echo ("<li>".$sql):
$result = $conn -> query($sql);
    if ($conn->query($sql)) {
        echo "ok";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}
echo('<table border="1" class="tabela"');
echo ("<tr><th>id</th><th>imie</th><th>dzial</th><th>zarobki</th></tr>");
while($row=$result->fetch_assoc()){
     echo("<tr>");
     //print_r($row);
         echo("<tr>");
         echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
         echo("<tr>");
     echo("</tr>");
 }
?>
</body>
</html>

