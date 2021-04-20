<?php
    echo('<h3>Usun role</h3>');
        echo('<form action="delrola.php" method="POST">');
            echo('<label>ID</label><input type="number" name="id"></br>');
            echo('<input type="submit" value="Usuń">');
        echo('</form>');
    echo('<h3>Usun osobe</h3>');
        echo('<form action="delosoba.php" method="POST">');
            echo('<label>ID</label><input type="number" name="id"></br>');
            echo('<input type="submit" value="Usuń">');
        echo('</form>');
    echo('<h3>Usun all</h3>');
        echo('<form action="delsystem.php" method="POST">');
            echo('<label>ID</label><input type="number" name="id"></br>');
            echo('<input type="submit" value="Usuń">');
        echo('</form>');
?>