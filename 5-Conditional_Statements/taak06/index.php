<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $var1 = 3;
    $var2 = 6;

    if($var1 < 10 && $var1 > 5) {
        echo "het getal zit tussen de 10 en de 5! <br>";
    } else {
        echo "het getal is groter dan 10 of kleiner dan 5! <br>";
    }

    if($var2 < 10 || $var1 > 5) {
        echo "het getal zit onder de 10 of boven de 5 of beide! <br>";
    } else {
        echo "het getal zit niet onder de 10 of boven de 5! <br>";
    }

    if($var1 < 10 xor $var2 > 5) {
        echo "het getal zit boven de 10 of onder de 5! <br>";
    } else {
        echo "het getal zit niet onder de 10 of boven de 5! <br>";
    }
    

    

   
        
        
    
    

    

    ?>
</body>
</html>