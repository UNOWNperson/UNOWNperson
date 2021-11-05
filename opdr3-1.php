<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdr3-1</title>
</head>
<body>
    <?php
    date_default_timezone_set("europe/amsterdam");

    $today = date("j F Y");
    echo "vandaag is het: $today";

    echo "<br>";

    $time = date("H:i");
    echo "het is nu: $time uur";

    echo "<br>";

    $dayoftheweek = date("j");
    echo "het is vandaag : $dayoftheweek -de van de week";

    echo "<br>";

    $month = date("F");
    $daysInMonth = date("t");
    echo "Deze maand, $month heeft $daysInMonth dagen";

    echo "<br>";

    $week = date ("W");
    echo "Deze week is het week: $week";
    ?>
</body>
</html>