<?php
# escreva um programa php usando 'for' 
# para criar um vetor com os números de 1 a 100
# for (  ;   ;  ){
#    
# }
# usando a instrução 'while' percorra o vetor acima
# e calcule a soma de todos elementos do mesmo
# while () {
    #
# }

for($i=0;$i<100;$i++){
    $numeros[$i] = $i + 1;
}


$soma = 0;
$i = 0;
echo "<table border=\"1\">";
echo '<tr><td>$i</td><td>$numeros[$i]</td><td>$soma</td></tr>';
while ($i <100){
    $soma += $numeros[$i];
    echo "<tr><td>$i</td><td>$numeros[$i]</td><td>$soma</td></tr>";
    $i++;
}
 
echo "</table>";


?>