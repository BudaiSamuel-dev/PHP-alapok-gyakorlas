<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            echo "<p>Ezt már a PHP dolgozza fel...</p>";

            echo "<p>Jó reggelt!</p>";

            $nev = "Sámmuel";

            // PHP-ben szövegeket a . karaktererel fűzünk össze
            echo "<p>Hello " . $nev .  "!</p>";

            echo '<p>Hello ' . $nev .  '!</p>';

            // " használata esetén a változók értékeit
            // behelyettesíti az értelmező
            echo "<p>Hello $nev !</p>";

            // egyszerű tömbdefiníció
            $tomb = [12, 56.1, -7, "Szia", true];

            echo '<p>A tömb elemei:</p>';
            echo '<ul>';
            echo '<li>' . $tomb[0] . '</li>';
            echo '<li>' . $tomb[1] . '</li>';
            echo '<li>' . $tomb[2] . '</li>';
            echo '<li>' . $tomb[3] . '</li>';
            echo '<li>' . $tomb[4] . '</li>';
            echo '</ul>';

            echo '<p>A tömb elemei foreach segítségével:</p>';
            echo '<ul>';

            foreach($tomb as $elem) {
                echo "<li>$elem</li>"; 
            }

            echo '</ul>';

            // Alapműveletek

            $a = 34.9;
            $b = 7.053;

            $osszeg = $a + $b;
            $kulonbseg = $a - $b;
            $szorzat = $a * $b;
            $hanyados = $a / $b;

            echo "a + b = $osszeg<br>";
            echo "a - b = $kulonbseg<br>";
            echo "a * b = $szorzat<br>";
            echo "a / b = $hanyados<br>";

            $aEgesz = 9;
            $bEgesz = 4;
            $maradek = $aEgesz % $bEgesz;

            echo "$aEgesz szám osztva $bEgesz számmal $maradek maradékot ad.";

            // Változók értékének és típusának kiírása a var_dump utasítással 
            // Ezt használjuk debug helyett

            echo '<br>';
            var_dump($aEgesz, $bEgesz);
            var_dump($tomb);

            // asszociatív tömbök

            $tombA = ['nev' => 'Valaki Péter', 'evfolyam' => 13, 'osztaly' => 'D'];

            foreach($tombA as $kulcs => $ertek) {
                echo "<p>$kulcs = $ertek</p>";
            }

            // Ez egy olyan tömb, aminek elemei asszociatív tömbök
            // Nagyon gyakran használjuk így!
            $tanulok = [
                ['nev' => 'Valaki Péter', 'evfolyam' => 13, 'osztaly' => 'D'],
                ['nev' => 'Kiss Ivett', 'evfolyam' => 12, 'osztaly' => 'A'],
                ['nev' => 'Varga Júlia', 'evfolyam' => 13, 'osztaly' => 'B'],
                ['nev' => 'Lajtai Elek', 'evfolyam' => 11, 'osztaly' => 'C']
            ];

            echo "<p>Tanulók listája:</p>";

            echo "<ul>";
            foreach($tanulok as $tanulo) {
                echo "<li>" . $tanulo['nev'] . " (" . $tanulo['evfolyam'] . "/" . $tanulo['osztaly'] . ")</li>";
            }
            echo "</ul>";

            var_dump($_GET);

            echo "<p>A kéréssel érkezett GET paraméterek:</p>";
            echo "<ul>";

            foreach($_GET as $kulcs => $ertek) {
                echo "<li>" . $kulcs. " => " . $ertek ."</li>";
            }
            
            echo "</ul>";
        ?>
    </body>
</html>