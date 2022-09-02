<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
</head>
<body>
    <h1>Vetores</h1>

    <?php

    $Nomes = ['Edna', 'Carol Miranda', 'Carol Abreu'];
    $Nomes[] = 'Milena';

    $Idades = array(18, 30 , 25, 18);
    
    echo '<h2> usando for </h2>';
    echo '<table border="1">';
    for($i=0; $i<=3;$i++){
        echo '<tr><td>'.$Nomes[$i].'</td></tr>';
    }
    echo '</table>';
    
    echo '<h2> usando for </h2>';
    echo '<table border="1">';
    echo '<tr>';
    for($i=0; $i<=3;$i++){
        echo '<td>'.$Nomes[$i].'</td>';
    }
    echo '</tr>';
    echo '</table>';


    echo '<h2> usando for </h2>';
    echo '<table border="1">';
    echo '<tr><th>Nome</th><th>Idade</th></tr>';
    for($i=0; $i<=3;$i++){
        echo '<tr><td>'.$Nomes[$i].'</td><td>'.$Idades[$i].'</td></tr>';
    }
    echo '</table>';
    
    echo '<h2> usando for </h2>';
    echo '<table border="1">';
    # cria linha com nomes
    echo '<tr><th>Nome</th>';
    for($i=0; $i<=3;$i++){
        echo '<td>'.$Nomes[$i].'</td>';
    }
    echo '</tr>';
    // cria linha com idades
    echo '<tr><th>Idade</th>';
    for($i=0; $i<=3;$i++){
        echo '<td>'.$Idades[$i].'</td>';
    }
    echo '</tr>';

    echo '</table>';
    ?>
    
</body>
</html>