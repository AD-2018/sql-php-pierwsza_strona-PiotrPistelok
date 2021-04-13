<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style2.css">
    <title>CSS Grid</title>
  </head>
  <body>
    <div class="container">
      <header>
      <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM Kancelaria_prawnik";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id</th><th>Prawnik</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['prawnik'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
?>
      </header>
      <nav>
      2
      </nav>
      <main>
      <?php
    require_once("../../connect.php");
    $sql = "SELECT id_kancelaria,prawnik,sprawa FROM Kancelaria,Kancelaria_sprawa,Kancelaria_prawnik where Kancelaria_sprawa.id=Kancelaria.Kancelaria_sprawa_id and Kancelaria_prawnik.id=Kancelaria.Kancelaria_prawnik_id";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id</th><th>prawnik</th><th>Sprawa</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_kancelaria'].'</td><td>'.$row['prawnik'].'</td><td>'.$row['sprawa'].'</td>');
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
    $sql = "SELECT * FROM Kancelaria_sprawa";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id</th><th>Sprawa</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['sprawa'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
?>
      </aside>
      <div class="zolty">
      6 
      </div>
    </div>
  </body>
</html>