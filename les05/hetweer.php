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
        $voorspelling = [
            "ma" => 20,
            "di" => 21,
            "wo" => 29,
            "do" => 19,
            "vr" => 24,
            "za" => 22,
            "zo" => 23
        ];
        
    // $dag = $_GET["dag"];
    // echo $dag . "<br>";
    // echo $voorspelling[$dag];
    echo "De voorspelling is " . $voorspelling[$_GET["dag"]] . " celcius";
       
        
    ?>
</body>
</html>