<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "duurzaamhuis";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// selecteer alle meterstanden
$result = $conn->query("SELECT * FROM meterstanden");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meterstanden</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        foreach ($result as $rij):?>
        <section>
            <h2><?php echo $rij["datum"]?></h2>
            <span><?php echo $rij["soort"]?></span>
            <em><?php echo $rij["stand"]?></em>
        </section>
    <?php endforeach?>
</body>
</html>