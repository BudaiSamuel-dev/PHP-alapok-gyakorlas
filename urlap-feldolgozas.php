<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Űrlap-feldolgozás</title>
</head>
<body>
    <?php
        // Az isset ellenőrzi, hogy létezik-e az adott változó, vagy nem null-e
        
        /*

        if( isset($_GET['nev']) ) {
            echo '<h2>Üdv ' . $_GET['nev'] . '!</h2>';
        } else {
            echo "Helytelenül hívtad meg az oldalt!";
        }

        if(isset($_GET['role'])) {
            echo 'A szerepköröd: ' . $_GET['role'];
        }

        */

        if( isset($_POST['nev']) ) {
            echo '<h2>Üdv ' . $_POST['nev'] . '!</h2>';
        } else {
            echo "Helytelenül hívtad meg az oldalt!";
        }

        if(isset($_POST['role'])) {
            echo 'A szerepköröd: ' . $_POST['role'];
        }

    ?>
</body>
</html>