<?php
    echo('<h3>Usun artykul</h3>');
        echo('<form action="delartykul.php" method="POST">');
            echo('<label>ID</label><input type="number" name="id"></br>');
            echo('<input type="submit" value="Usuń">');
        echo('</form>');
    echo('<h3>Usun producenta</h3>');
        echo('<form action="delproducent.php" method="POST">');
            echo('<label>ID</label><input type="number" name="id"></br>');
            echo('<input type="submit" value="Usuń">');
        echo('</form>');
    echo('<h3>Usun all</h3>');
        echo('<form action="delsklep.php" method="POST">');
            echo('<label>ID</label><input type="number" name="id"></br>');
            echo('<input type="submit" value="Usuń">');
        echo('</form>');
?>