<?php
    include "functions.php";

    echo add(4, 6) . "<br>";
    echo divide(10, 5) . "<br>";
    echo multiply(12, 9) . "<br>";
    
    // Rit kosten berekenen Berlijn
    $berekenRitKosten = berekenRitKosten(663, 15, 1.90);
    echo number_format($berekenRitKosten, 2) . "<br>";

    // Rit kosten berekenen Stockholm
    $berekenRitKosten = berekenRitKosten(1438, 20, 1.46);
    echo number_format($berekenRitKosten, 2) . "<br>";

    // Rit kosten berekenen Kiev
    $berekenRitKosten = berekenRitKosten(1991, 18.47, 2.23);
    echo number_format($berekenRitKosten, 2) . "<br>";

    // Vliegreizen
    $kosten = berekenReisKosten(3722, 2.05, 20, false);
    echo "\xE2\x82\xAc" . number_format($kosten, 2);

?>