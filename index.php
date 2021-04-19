<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>Piotr Pistelok</title>
</head>
<body>
    <div class="container">
        <div class="tytul">
            <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-PiotrPistelok">GitHub</a>
        </div>
        <div class="imie">
            <h2>Piotr Pistelok nr 9</h2>
        </div>
    </div>
    <div class="nav">
        <?php include_once("menu.php");?>
    </div>
    <div class="strona">
<?php
    require_once("connect.php");
    $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id_pracownika</th><th>imię</th><th>dział</th><th>zarobki</th><th>data urodzenia</th><th>id_org</th><th>nazwa działu</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td><td>'.$row['id_org'].'</td><td>'.$row['nazwa_dzial'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
?>
    </div>
</body>
</html>



