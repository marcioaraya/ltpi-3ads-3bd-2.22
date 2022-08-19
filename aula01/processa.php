<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*  "JOGADA ENSAIADA"

       formulário                 programa_php
       ---------------------      ---------------------
       action="processa.php"   -> nome do programa 
                                  que receberá dados
                                  do formulário
       method="GET"            -> $_GET[]
       <input ..name="nome"    -> índice do vetor $_GET 

       ========================================
       Além do $_GET, existe $_POST (para method='POST')
       e $_REQUEST que funciona para method=GET e method=POST
       */
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        echo "<p>Olá! $nome
              . Sua idade é $idade.</p>";
    ?>
</body>
</html>