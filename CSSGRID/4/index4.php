<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="../../style.css">
    <title>CSS Grid</title>
  </head>
  <body>
    <div class="container">
      <header>
      <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM System_osoba";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id</th><th>Osoba</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['osoba'].'</td>'.'<td>
            <form action="delosoba.php" method="POST">
            <input type="number" name="id" value="'.$row['id'].'" hidden>
            <input type="submit" value="X">
            </form>
            </td>');
            echo('</tr>');
     }
        echo('</table>');
?>
      </header>
      <nav>
      <ul class="nav1">
        <li class="nav1_link"> <a class="link" href="../index.html">Powrót</a></li>
      </ul>
      </nav>
      <main>
      <?php
    require_once("../../connect.php");
    $sql = "SELECT id_system,osoba,rola FROM System_osoba,System_rola,Systemm where System_osoba.id=Systemm.system_osoba_id and System_rola.id=Systemm.system_rola_id";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id</th><th>Osoba</th><th>Rola</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_system'].'</td><td>'.$row['osoba'].'</td><td>'.$row['rola'].'</td>'.'<td>
            <form action="delsystem.php" method="POST">
            <input type="number" name="id" value="'.$row['id_system'].'" hidden>
            <input type="submit" value="X">
            </form>
            </td>');
            echo('</tr>');
     }
        echo('</table>');
?>
      </main>
      <footer>
      <?php
      require_once("del.php");
      ?>
      </footer>
      <aside>
      <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM System_rola";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id</th><th>Rola</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['rola'].'</td>'.'<td>
            <form action="delrola.php" method="POST">
            <input type="number" name="id" value="'.$row['id'].'" hidden>
            <input type="submit" value="X">
            </form>
            </td>');
            echo('</tr>');
     }
        echo('</table>');
?>
      </aside>
    </div>
  </body>
</html>