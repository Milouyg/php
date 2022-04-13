<?php
    $data = [
        12,
        45.75,
        "Milou",
        "20-03-2022",
        true,
        "Amsterdam",
        [245,76,123]
    ];

    header("Content-Type: application/json");
    $json = json_encode($data);
    echo $json;
?>