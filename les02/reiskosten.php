<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reiskosten</title>
</head>
<body>
<?php
    // Van Nl naar Bordeaux is 1061.10km
    // liter Euro95 is 2,40 euro
    // Met 1 liter benzine rijd je 15km
    // Tank inhoud = 50l
    // Je moet 1x tanken en hebt nog 21 liter nodig voor 1075km
    // 71 liter x $2.40 = $170,40

    //prijs met auto
    $euro95 = 2.40;
    $liter_per_km = 15;
    $tankInhoud = 50; 
    $afstand = 1061;
    $kosten = 170.40;

    $tankAfstand = $tankInhoud * $liter_per_km;
    $aantalKeerTanken = $afstand / $tankAfstand;

    echo "Aantal keer tanken is " .ceil($aantalKeerTanken). "<br>";

    $uitkomst = ($afstand / $liter_per_km) * $euro95;
    echo $uitkomst;

    // trein 
    $treinKaartje = 63;

    if ( $uitkomst > 200 ){
        echo "De afstand van Nederland naar Bordeaux is $afstand. <br> De totale prijs is $kosten en je moet .. tanken.";
        echo "Ik ga met de trein.";
    }
    else{
        echo " Ik ga met de auto.";
    }

    ?>
</body>
</html>