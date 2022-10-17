<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções - Exercício F </title>
</head>
<body>
<?php

function buscaTexto($texto, $busca){

    $vetor_busca[]=$busca;
    $vetor_substituir   = array("<spam style=\"color:red\">".$busca."</spam>");

    $novafrase = str_replace($vetor_busca, $vetor_substituir, $texto);

    return $novafrase;

}

$texto  = "O rato roeu a roupa do rei de Roma.";
$busca = "rato";
echo buscaTexto($texto, $busca);

?>
</body>
</html>