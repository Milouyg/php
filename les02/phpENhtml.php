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

    $titelPagina = "Kitten in tree";
    $image = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.royalcanin.com%2Fnl%2Fcats%2Fkitten%2Fi-found-a-lost-kitten-what-should-i-do&psig=AOvVaw2A6b_RlBCFiygCRVKhkghJ&ust=1646726421981000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCLiB6YzEs_YCFQAAAAAdAAAAABAE";
    $titel = "Kitten";
    $maker = "Milou";

    echo "De naam van de pagina is $titelPagina <br> de naam van de image is $image, de naam van de titel is $titel <br> en mijn naam is $maker.";
    ?>

    <h1><?php echo $titel; ?></h1>
    <img src="<?php echo $image?>" alt="<?php echo $titel?>"/>


</body>
</html> 
