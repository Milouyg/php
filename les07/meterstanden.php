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

// data array met labels en values maken
$data = ["labels" => [], "values" => []];

// Met een loop door alle meterstanden: label en value in de data array toevoegen
foreach ($result as $rij){
  $data["labels"][] = $rij["datum"];
  $data["values"][] = $rij["stand"];
}

// Stuur header naar browser dat er JSON aankomt
header("Content-Type: application/json");

// Zet de $data array om naar Json met json_encode()
$json = json_encode($data);

// Stuur de JSON naar het scherm (browser)
echo $json;

