<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        # comentário até o final da linha
        // comentário até o final da linha
        # um sinal de igual significa ATRIBUIÇÃO
        $a = 10;
        $b = 1;
        if ($a = $b) {
        echo "verdadeiro";
        } else {
        echo "falso";}

# DOIS sinais de igual compara apenas o VALOR
        $a = 10;
        $b = "10";
        if ($a == $b) {
        echo '<p>$a == $b'." verdadeiro</p>";
        } else {
        echo '<p>$a == $b'." falso</p>";}

# TRÊS sinais de igual compara o VALOR e o tipo da variável
        $a = 10;
        $b = 10;
        if ($a === $b) {
        echo '<p>$a === $b'." verdadeiro</p>";
        } else {
        echo '<p>$a === $b'." falso</p>";}

        # outra forma de criar um vetor
        $nomes = ["Carol", "Matheus", "Antônio"];
        echo '<hr>';
# var_dump - mostra o conteúdo de uma variável, incluindo o tipo 
#            do conteúdo
        var_dump($nomes);
        echo '<hr>';
# print_r - mostra o conteúdo de uma variável, sem mostrar
#           os respectivos tipos
        print_r($nomes);
    ?>
</body>
</html>