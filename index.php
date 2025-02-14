<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = "Petr";
        $text = "Uživatel" ;
    ?>

    <h1>Moje první bolest</h1>
    <p>Lorem ipsum dolor sit amet elit:<?php echo "$name Breit"; ?>
    </p>
    
    <?php
        echo "<h3>Proměná: $name</h3>"
    ?>

    <?php
        $i = 0;

        while($i <= 10){
            echo "<h3> $text $i </h3>";
            $i = $i + 2;
        }
        
        for ($j = 0; $j <= 10; $j++) {
            echo "The number is: $j <br>";
          }

    ?>
</body>
</html>