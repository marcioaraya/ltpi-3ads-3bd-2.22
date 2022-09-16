<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <h1>foreach</h1>

    <?php
        $al1 = ["Salomão", "M", 53];
        $al2 = ["Carol", "F", 30];
        $al3 = ["Wanderson", "M", 25];
          
        $alunos = [ $al1, $al2, $al3];

        foreach($alunos as $x) {
            foreach($x as $v) {
                echo $v . '<br>';
            }
        }


        
    ?>
</body>
</html>