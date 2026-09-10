<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Második PHP oldalunk</title>
</head>
<body>
    <h3>Üdv Látogató!</h3>

    <p>A Naprendszer bolygói:</p>
    <ul>
        <?php
            $bolygok = 
            [
                "Merkur", "Vénusz", "Föld", "Mars",
                "Jupiter", "Szaturnusz", "Uránusz", "Neptunusz"
            ];
            foreach($bolygok as $bolygo) {
                echo "<li>$bolygo</li>";
            }
        ?>
    </ul>
    <p>Na akkor egy kis újdonság:</p>
    <?php
        $egeszSzam = 17;
        if($egeszSzam % 2 == 0) {
            echo "A(z) $egeszSzam egy páros szám.";
        } else {
            echo "A(z) $egeszSzam egy páratlan szám.";
        }
    ?>
    <p>Űrlap példa</p>
    <form action="urlap-feldolgozas.php" method="POST">
        Név: <input type="text" name="nev" />
        <input type="submit" value="Mehet">
        <input type="hidden" name="role" value="admin" />
    </form>
</body>
</html>