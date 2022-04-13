<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatuur</title>
</head>
<body>
<?php

// Fahrenheit naar Celsius
$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";

// Celsius naar Fahrenheit
$celsius = 59;
$fahrenheit = ($celsius * 1.8) + 32;
echo "{$celsius} graden Celcius = {$celsius} graden Fahrenheit. <br/>";

// Celsius naar Kelvin
$celsius = 54;
$kelvin = $celsius + 273.15;
echo " {$celsius} graden Celsius = {$kelvin} graden Kelvin. <br/>";

// Kelvin naar Celcius
$kelvin = 486;
$celsius = $kelvin - 273.15;
echo "{$kelvin} graden Kelvin = {$celsius} graden Celsius. <br/>";

// Alle berekeningen
echo "<br> Dit zijn alle berekeningen van het omrekenen naar een temperatuur eenheid:
        {$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>
        {$celsius} graden Celcius = {$celsius} graden Fahrenheit. <br/>
        {$celsius} graden Celsius = {$kelvin} graden Kelvin. <br/>
        {$kelvin} graden Kelvin = {$celsius} graden Celsius. <br/>;"

?>
</body>
</html>