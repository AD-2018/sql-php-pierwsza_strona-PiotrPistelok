<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="../../style.css">
    <title>CSS Grid</title>
  </head>
  <body>
    <div class="container">
      <header>
      <div class="powrot">
      <ul class="nav1">
        <li class="nav1_link"> <a class="link" href="../index.html">Powrót</a></li>
      </ul>
      </div>
      <div class="tabela1">
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
            echo('<td>'.$row['id'].'</td><td>'.$row['pracownik'].'</td>'.'<td>
            <form action="delprac.php" method="POST">
            <input type="number" name="id" value="'.$row['id'].'" hidden>
            <input type="submit" value="X">
            </form>
            </td>');
            echo('</tr>');
     }
        echo('</table>');
?>
        </div>
      </header>
      <nav>
        <?php
          include_once("del.php");
        ?>
      </nav>
      <main>
      <?php
    require_once("../../connect.php");
    $sql = "SELECT id_firma,pracownik,projekt FROM Firma,Firma_pracownik,Firma_projekt where Firma_pracownik.id=Firma.Firma_pracownik_id and Firma_projekt.id=Firma.Firma_projekt_id";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id</th><th>pracownik</th><th>projekt</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_firma'].'</td><td>'.$row['pracownik'].'</td><td>'.$row['projekt'].'</td>'.'<td>
            <form action="delfirma.php" method="POST">
            <input type="number" name="id" value="'.$row['id_firma'].'" hidden>
            <input type="submit" value="X">
            </form>
            </td>');
            echo('</tr>');
     }
        echo('</table>');
?>
      </main>
      <footer>
      4
      </footer>
      <aside>
      <div class="tabela1">
      <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM Firma_projekt";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id</th><th>projekt</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['projekt'].'</td>'.'<td>
            <form action="delprojekt.php" method="POST">
            <input type="number" name="id" value="'.$row['id'].'" hidden>
            <input type="submit" value="X">
            </form>
            </td>');
            echo('</tr>');
     }
        echo('</table>');
?>
        </div>
      </aside>
    </div>
  </body>
</html>