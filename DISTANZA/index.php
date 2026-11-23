<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        //Qui definisco due punti

        /*
        Pigey -> 40 HP, 45 Attack
        Squirtle -> 44 HP, Attack
        Caterpie -> 45 HP, 30 Attack

        */

        function distance($a, $b){ // $a e $b sono due array che contengono le cooordinate x e y dei punti

            $cat1 = abs($a[0] - $b[0] );
            $cat2 = abs($a[1] - $b[1]);
            $cat3 = abs($a[2] - $b[2]);
            $ipotenusa=sqrt(pow($cat1, 2) + pow($cat2, 2) + pow($cat3, 2));

            return $ipotenusa;
        }


        function distanceNDimensione ($a, $b){
            //Calcolare la formula sopra (radice quadrata della somma dei quadrati cosgtruiti sui ogni dimensione
            $ipotenusa=0;
            for($i=0; $i<count($a); $i++){
                $cat=abs($a[$i] - $b[$i]);
                $ipotenusa +=pow($cat, 2);
            }

            $ipotenusa=sqrt($ipotenusa); 
            return $ipotenusa;
        }

        $pidgey = [40, 45, 40];
        $squirtle = [44, 48, 65];
        $caterpie = [45, 30, 35];



        echo "Dsiatnza fra Pidgey e Squirtle: " . distance($pidgey, $squirtle) . "<br />";
        echo "Dsiatnza fra Pidgey e Caterpie: " . distance($pidgey, $caterpie) . "<br />";
        echo "Dsiatnza fra Squirtle e Caterpie: " . distance($squirtle, $caterpie) . "<br />";

    ?>

</body>
</html>