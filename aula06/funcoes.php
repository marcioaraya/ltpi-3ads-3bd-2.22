<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Funções</h1>
      
    <?php
        function media($n1, $n2){
            $media = ($n1 + $n2)/2;
            return $media;
        }

        echo media(5, 8) . '<br>';

        $texto = 'biscoito';
        for($i=0; $i <= mb_strlen($texto);$i++){
            echo mb_substr($texto, 0, $i) . '<br>';
        }

        $texto = 'biscoito';
        for($i=0; $i < mb_strlen($texto);$i++){
            echo mb_substr($texto, $i, 1) . '<br>';
        }

    ?>
</body>
</html>