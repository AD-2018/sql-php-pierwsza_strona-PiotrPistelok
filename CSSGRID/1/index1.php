<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style1.css">
    <title>CSS Grid</title>
  </head>
  <body>
    <div class="container">
      <header>
      <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM Firma_pracownik";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id_pracownika</th><th>imię</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['pracownik'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
?>
      </header>
      <nav>
      2
      </nav>
      <main>
      3
      </main>
      <footer>
      4
      </footer>
      <aside>
      5
      </aside>
    </div>
  </body>
</html>