<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $test1 = 3;
    $test2 = 6;
    
    if($test1 == $test2) {
        echo "gelijk <br>";
    }
    else {
        echo "niet gelijk <br>";
    }

    if($test1 != $test2) {
        echo "ongelijk <br>";
    }
    else {
        echo "gelijk <br>";
    }

    if($test1 === $test2) {
        echo "identiek <br>";
    }
    else {
        echo "niet identiek <br>";
    }

    if($test1 > $test2) {
        echo "groter <br>";
    }
    else {
        echo "niet groter <br>";
    }

    if($test1 < $test2) {
        echo "kleiner <br>";
    }
    else {
        echo "groter <br>";
    }

    if($test1 >= $test2) {
        echo "groter of gelijk <br>";
    }
    else {
        echo "niet groter of niet gelijk <br>";
    }

    if($test1 <= $test2) {
        echo "kleiner of gelijk <br>";
    }
    else {
        echo "niet kleiner of niet gelijk <br>";
    }






    ?>
</body>
</html>