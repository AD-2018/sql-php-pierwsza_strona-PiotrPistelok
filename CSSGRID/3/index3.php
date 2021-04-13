<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style3.css">
    <title>CSS Grid</title>
  </head>
  <body>
    <div class="container">
      <header>
      <div class="tabela">
      <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM Sklep_artykuly";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id</th><th>Artykul</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['artykul'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
?>
        </div>
      </header>
      <nav>
      2
      </nav>
      <main>
      <?php
    require_once("../../connect.php");
    $sql = "SELECT id_sklep,artykul,producent FROM Sklep_artykuly,Sklep_producenci,Sklep where Sklep_artykuly.id=Sklep.sklep_artykuly_id and Sklep_producenci.id=Sklep.sklep_producenci_id";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id</th><th>Artykul</th><th>Producent</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_sklep'].'</td><td>'.$row['artykul'].'</td><td>'.$row['producent'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
?>
      </main>
      <footer>
      4
      </footer>
      <aside>
      <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM Sklep_producenci";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id</th><th>Producent</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['producent'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
?>
      </aside>
    </div>
  </body>
</html>