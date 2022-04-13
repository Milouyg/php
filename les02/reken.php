<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekenen</title>
</head>
<body>
<?php
    // getal afronden naar boven
    $getal = 6.53067;
    $afgerond = ceil($getal);

    echo "Als je ${getal} afrond, dan is het {$afgerond} <br>";

    // getal afronden naar beneden
    $getal = 3.49783;
    $afgerond = floor($getal);

    echo "Als je ${getal} afrond, dan is het ${afgerond} <br>";

    // random getal generator
    $getal1 = rand();
    $getal2 = rand();
    $getal3 = rand();
    $som = $getal1 + $getal2;
    $uitkomst = $som / $getal3;

    echo "Getal1 en getal2 zijn samen $som <br>";
    echo "Getal1 en getal2, daarvan de uitkomst en dit delen door getal3 is $uitkomst <br>";
    echo "De uitkomst van de berekening is ${uitkomst} <br>";
    ?> 
</body>
</html>