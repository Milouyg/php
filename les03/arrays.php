<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

<?php
    $namen = ["Milou", "Frits", "Daniël", "Tristan", "Carmen"];
    echo count($namen) ."<br>";
    echo sort($namen) ."<br>";
    print_r($namen) ."<br>";
    array_pop($namen) ."<br>";

    $namen = ["Milou", "Frits", "Daniël", "Tristan", "Carmen"];
    $namen_tekst = implode("-", $namen);
    echo $namen_tekst;
    $namen2 = explode("-", $namen_tekst);
    print_r($namen2);
?>
    
</body>
</html>
