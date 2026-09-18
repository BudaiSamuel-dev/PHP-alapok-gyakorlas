<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $felhasznalo = "Budai Sámuel";
        echo "<p>Jó reggelt $felhasznalo</p>";

        $a = 5.6;
        $b = 7.22;
        $c = 9.09;
        $s = ($a + $b + $c)/2;
        $t = sqrt($s*($s-$a)*($s-$b)*($s-$c));

        number_format($t, 3);
        echo "<p>A háromszög területe: $t</p>";

        $tanuloKati = "Kati";
        $tanuloTibor = "Tibor";
        $tanuloJulcsi = "Julcsi";
        
        echo "<p>$tanuloKati, $tanuloTibor és $tanuloJulcsi 12/A osztályos tanulók.</p>";

        $maganhangzok = ["a", "á", "e", "i","í", "o", "ó", "ö","ő", "u", "ú", "ü", "ű"];

        $sor = "A magyar nyelvben " . count($maganhangzok) ." magánhangzó van: ";

        $kiegeszitoSor = "";
        foreach ($maganhangzok as $hangzo) {
            if ($kiegeszitoSor != "") {
                $kiegeszitoSor .= ", " .$hangzo;
            }else {
                $kiegeszitoSor .= $hangzo;
            }    
        }

        echo "<p>" . $sor . $kiegeszitoSor . "</p>";

        $konyvek = [
            ['szerzo' => "Jókai Mór", 'cim' => "Az aranyember", 'kiado' => "Európa", 'oldalszam' => 320],
            ['szerzo' => "Kosztolányi Dezső", 'cim' => "Édes Anna", 'kiado' => "Kossuth", 'oldalszam' => 188],
            ['szerzo' => "Örkény István", 'cim' => "Tóték", 'kiado' => "Európa", 'oldalszam' => 225]
        ];

        echo "<table border='1'>";
        echo "<tr><th>Szerző</th><th>Cím</th><th>Kiadó</th><th>Oldalszám</th></tr>";
        foreach ($konyvek as $konyv) {
            echo "<tr><td>" . $konyv['szerzo'] . "</td><td>" . $konyv['cim'] . "</td><td>" . $konyv['kiado'] . "</td><td>" . $konyv['oldalszam'] . "</td></tr>";
        }
        echo "</table>";

        $legkisebbOldalszamuKonyv = null;
        foreach ($konyvek as $konyv) {
            if ($legkisebbOldalszamuKonyv == null || $konyv['oldalszam'] < $legkisebbOldalszamuKonyv['oldalszam']) {
                $legkisebbOldalszamuKonyv = $konyv;
            }
        }
        echo "<p>A legkevesebb oldalt (" . $legkisebbOldalszamuKonyv['oldalszam'] . " oldal) " . $legkisebbOldalszamuKonyv['cim'] . " c. " . $legkisebbOldalszamuKonyv['szerzo'] . " könyve
        tartalmazza.</p>";

        array_push($konyvek, ['szerzo' => "Krasztnahorkai László", 'cim' => "Az ellenállás melankóliája", 'kiado' => "Magvető Kiadó", 'oldalszam' => 388]);

        echo "<p>A tömb jelenleg " . count($konyvek) . " könyvet tartalmaz.</p>";
    ?>
</body>
</html>
