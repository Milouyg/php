<?php

$type = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

$type = $_POST['type'];
$url = 'https://www.boredapi.com/api/activity?type=' . $_POST['type'];
$json = file_get_contents($url);

$data = json_decode($json, true);
};

$soorten = ["education", "recreational", "social", "diy", "charity", "cooking", "relaxation", "music", "busywork"];
sort($soorten);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <form action="api.php" method="POST">
            <label>kies soort</label>
            <select name="type">
                <?php foreach($soorten as $soort): ?>
                    <option value='<?php echo $soort; ?>' <?php if ($type == $soort) : ?> selected<?php endif; ?>>kies <?php echo $soort; ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit">haal iets leuks op</button>
        </form>

        <?php if($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
        <h2><?php echo $data['activity'] ; ?></h2>
        <?php if($data['link'] != '') : ?>
            <a href='<?php echo $data ?>'>Meer info </a>
        <?php endif; ?>
        <?php endif; ?>

        <p>
            Aantal mensen: <?php echo $data['participants']; ?>
        </p>

        <?php if ($data['link'] != '') :?>
            <a href="<?php echo $data['link'] ?>">meer info</a>
            <?php endif; ?>

    </section>
</body>
</html>