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
    function currentDateTime(){
        echo date("d-m-Y H:i:s") . "<br>";
    }
    currentDateTime();

    function add($getal1, $getal2){
        $som = $getal1 + $getal2;
        return $som;
    }
    $add_result = add(4, 6);
    
    function divide($getal1, $getal2){
        $som = $getal1 / $getal2;
        return $som;
    }
    $result_divide = divide(20, 10);

    function multiply($getal1, $getal2){
        $som = $getal1 * $getal2;
        return $som;
    }
    $result_multiply = multiply(12, 9);

    // Function reiskosten
    /**
     * Undocumented function
     *
     * @param [int] $afstand_km
     * @param [int] $km_per_liter
     * @param [int] $liter_prijs
     * @param [boolean] $isBusiness
     * @return void 
     */

    function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs){
        $aantal_liters = $afstand_km/$km_per_liter;
        $kosten_euro = $aantal_liters * $liter_prijs;
    
        return $kosten_euro;
    };

    function berekenReisKosten($kmAfstand, $prijsKerosine, $kiloBagage, $isBusiness){
        $kostenReis = $prijsKerosine * $kmAfstand / 30;
        $kostenBagage = 5 * $kiloBagage;
        $totalePrijs = $kostenReis + $kostenBagage;
        if($isBusiness){
            // $totalePrijs = $totalePrijs * 1.5; 
            $totalePrijs *= 1.5; 
        }
        return $totalePrijs;
    };
    ?>
    
</body>
</html>

