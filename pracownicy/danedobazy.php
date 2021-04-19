<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../style.css">
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width">
  	<title>Piotr Pistelok</title>
</head>
<body>
    <div class="tytul">
        <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-PiotrPistelok">GitHub</a>
        <h2>Piotr Pistelok nr 9</h2>
    </div>
    <div class="nav">
        <?php include_once("../menu2.php");?>
    </div>
    <div class="strona">
<h3>DODAJ PRACOWNIKA</h3>	
	<form action="insert.php" method="POST">
	    	<label>Imię: </label><input type="text" name="imie"></br>
		<label>Dział: </label><input type="number" name="dzial"></br>
		<label>Zarobki: </label><input type="number" name="zarobki"></br>
		<label>Data urodzenia: </label><input type="date" name="data_urodzenia"></br>
	    	<input type="submit" value="dodaj pracownika">
	</form>
<h3>USUN PRACOWNIKA</h3>
	<form action="delete.php" method="POST">
   		<label>ID pracownika: </label><input type="number" name="id"></br>
   		<input type="submit" value="Usuń pracownika">
	</form>
<?php
    require_once("../connect.php");
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
        echo('<th>Id_pracownika</th><th>imię</th><th>dział</th><th>zarobki</th><th>data urodzenia</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td>'.
            '<td>
	        <form action="delete.php" method="POST">
  		<input type="number" name="id" value="'.$row['id_pracownicy'].'" hidden>
   		<input type="submit" value="X">
	</form>
	</td>');
		echo('</tr>');
     }
        echo('</table>');
?>
	</div>
</body>


</html>
