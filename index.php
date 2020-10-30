<?php

$sql ="select * from pracownicy";
echo("<h3>ZAD.1</h3>");
$result = mysqli_query($conn, $sql);


echo('<table border="1" class="tabela"');
echo ("<tr><th>id</th><th>imie</th><th>dzial</th><th>zarobki</th></tr>");
while($row=mysqli_fetch_assoc($result)){
echo("<tr>");
    //print_r($row);
    echo("<tr>");
    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
    echo("<tr>");
echo("</tr>");

}

?>
