<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associatieve arrays</title>
</head>
<body>

<?php
    $weer = [
        "maandag" => 11.1,
        "dinsdag" => 9.6,
        "woensdag" => 8.2,
        "donderdag" => 10.6,
        "vrijdag" => 5.8,
        "zaterdag" => -1.5,
        "zondag" => -3.5
];

foreach($weer as $dag => $temperatuur) {
    echo $dag . "wordt het" . $temperatuur . " graden" . "<br>";
}

foreach($weer as $dag => $temperatuur){
    echo "<tr>";
    echo "<td>" .$dag. "</td><td>" .$temperatuur. " &deg; </td>";
    echo "</tr>";
}
?>

</body>
</html>