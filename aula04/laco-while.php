<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Decrementar de um em um</h1>
    <?php
        for($i=10;$i>=0;$i--){
            echo "$i<br>"; # aspas duplas substitui
            echo '$i<br>'; # aspas simples não substitui
            echo '<hr>';
        }
    ?>
    
    <h1>decrementar de dois em dois</h1>
    
    <?php

    for($i=10;$i>=0;$i=$i-2){
        echo "$i<br>"; # aspas duplas substitui
        echo '$i<br>'; # aspas simples não substitui
        echo '<hr>';
    }
    ?>

    <h1>Usando while</h1>
    <?php
    $i = 10; // antes
    while ($i >=0){
        echo "$i<br>";
        echo "<hr>";
        $i = $i - 2; // depois
    }
    ?>


</body>
</html>