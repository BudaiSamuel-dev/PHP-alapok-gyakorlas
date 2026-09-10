<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
            $aSzam = 18.2;
            $bSzam = 5.844;

            echo "<p>";
            echo "a = $aSzam <br>";
            echo "b = $bSzam";
            echo "</p>";

            echo "<p>Alapműveletek:</p>";
            echo '<p>a + b = ' .$aSzam+$bSzam .'</p>';
            echo '<p>a - b = ' .$aSzam-$bSzam .'</p>';
            echo '<p>a * b = ' .$aSzam*$bSzam .'</p>';
            echo '<p>a / b = ' .$aSzam/$bSzam .'</p>';
            echo '<p>a % b = ' .$aSzam%$bSzam .'</p>';

            $parosak = [];
            
            /*
            $index = 0;
            
            for ($i = 2; $i < 21; $i+=2){
                $parosak[$index] = $i;
                $index++;
            }
            */

            //Másik megoldás
            for ($i = 2; $i < 21; $i+=2){
                array_push($parosak, $i); //Ezzel egyenértékű: $parosak[] += $i
            }

            echo "<br><p>A tömb elemei:</p>";
            $index = 1;
            foreach($parosak as $szam){
                echo "<p>$index. elem: $szam</p>";
                $index++;
            }

            echo "<br>";
            $vizsgaltSzamok = [5, 8, 14, 17, 18, 22];
            foreach($vizsgaltSzamok as $szam){
                if(in_array($szam, $parosak)){
                    echo "<p>A(z) $szam benne van a tömben.</p>";
                }else{
                    echo "<p>A(z) $szam nincs benne a tömben.</p>";
                }
            }

            echo "<p>--------------------------------------------------</p>";

            $tanulok = [
                ['nev' => 'Varga Anett', 'lakhely' => 'Nagykanizsa', 'evVegiAtlag' => 4.22],
                ['nev' => 'Tálos Balázs', 'lakhely' => 'Eszteregnye', 'evVegiAtlag' => 3.85],
                ['nev' => 'Antalics Katalin', 'lakhely' => 'Zalakaros', 'evVegiAtlag' => 4.09]
            ];

            echo "<p>Tanulok legalább 4-es átlaggal:</p>";
            echo "<ul>";
            $osszAtlag = 0;
            
            foreach($tanulok as $tanulo){
                $osszAtlag += $tanulo['evVegiAtlag'];
                if($tanulo['evVegiAtlag'] >= 4.00){
                    echo "<li>".$tanulo['nev'] ."</li>";
                }
            }
            echo "</ul>";

            $osszAtlag = $osszAtlag/count($tanulok);
            number_format($osszAtlag, 3);
            echo "<p>A tanulok év végi átlagának átlaga: $osszAtlag</p>";

            echo "<p>--------------------------------------------------</p>";

            $szam = 11;
            echo "<p>While ciklussal a páratlan számok [10,49]</p>";
            echo "<p>";
            while($szam < 50){
                if($szam < 49){
                    echo "$szam, ";
                }else if($szam == 49){
                    echo"$szam";
                }

                $szam+=2;
            }
            echo "</p>";

            echo "<p>--------------------------------------------------</p>";

            echo "<p>For ciklussal a páratlan számok [10,49]</p>";
            echo "<p>";
            for($i = 11; $i < 50; $i += 2){
                if($i < 49){
                    echo "$i, ";
                }else if($i == 49){
                    echo"$i";
                }
            }
            echo "</p>";
            ?>
    </body>
</html>