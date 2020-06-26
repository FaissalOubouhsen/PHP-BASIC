<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $prod_besteld = 8;

    if($prod_besteld < 10) {
        echo  "1.50";
    } elseif($prod_besteld < 20) {
        echo  "1.25";
    } else {
        echo  "1.00";
    }

    ?>
</body>
</html>