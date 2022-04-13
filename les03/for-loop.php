<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
</head>
<body>
    <?php
        $pokemons = [
            "Charmander",
            "Growlith",
            "Lucario",
            "Pikachu",
            "Luxray"
        ];
    
        $img = [
            "https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png", 
            "https://assets.pokemon.com/assets/cms2/img/pokedex/full/058.png",
            "https://assets.pokemon.com/assets/cms2/img/pokedex/full/448.png",
            "https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png",
            "https://assets.pokemon.com/assets/cms2/img/pokedex/full/405.png"
        ];
    
        $lengte = count($pokemons);
        for ($i = 0; $i < $lengte; $i++){
            echo "<h1>" . $i . "-" . $pokemons[$i] . "</h1> <br/>";
            echo "<img src=" . $img[$i] . "<br/>";
        }
    
        // array_reverse() draait de array om
        var_dump(array_reverse($pokemons));
    
        // implode() voegt elementen samen aan een string 
        var_dump(implode("-", $pokemons));
    
        // sort() sorteert de gegeven array
        sort($pokemons);
        print_r($pokemons);
    
        // array_push() voegt 1 of meerdere elementen aan het einde van de array
        array_push($pokemons, "Garchomp");
        print_r($pokemons);
    
        // array_pop() haalt de laatste element van een array op
        array_pop($pokemons);
        print_r($pokemons);
    ?>
</body>
</html>