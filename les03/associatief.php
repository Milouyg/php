Meyuwa — Today at 10:42 AM
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $verbruik = [
            "Computer met randapparatuur" => 150,
            "Elektrische boiler" => 150,
            "TV-decoder met harde schijf" => 130,
            "Internetmodem" => 80,
            "Kokendwaterkraan" => 80
        ];

        foreach ($verbruik as $apparaat => $KwH){
            echo $verbruik . " verbruikt " . $KwH . " KwH </br>";
        }

        $totaal = 0;
        foreach ($verbruik as $apparaat => $KwH) {
            $totaal += $KwH;
        };
        echo "Alle KwH bij elkaar opgeteld kom je uit op " . $totaal;
    ?>
</body>
</html>