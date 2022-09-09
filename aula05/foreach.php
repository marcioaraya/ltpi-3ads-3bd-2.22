<?php

$notas['Thomas'] = 9.0;
$notas['Ricardo'] = 8.5;
$notas['Roberth'] = 8.0;

// outra forma
$notas = ['Thomas'=> 9.0, 'Ricardo'=> 8.5, 'Roberth'=> 8.0];

//outra forma
$notas = array('Thomas' => 9.0, 'Ricardo' => 8.5, 'Roberth'=> 8.0 );

echo '<h1>mostrando apenas o valor</h1>';
foreach($notas as $v){
    echo $v . "<br>";
}
  
echo '<h1>mostrando o índice e o valor</h1>';

foreach($notas as $p=>$v){
    echo "$p - $v <br>";
}

echo '<h1>Vetor de vetores</h1>';

$frutas = ["Pera", "Carambola", "Limão"];
$legumes = ["Cenoura", "Jerimum", "Chuchu"];
$alimentos = array($frutas, $legumes);
 
echo '<table border="1">';
foreach($alimentos as $al){
    echo '<tr>';
    foreach($al as $v){
        echo '<td>'.$v .'</td>';
    }
    echo '</tr>';
}
echo '</table>';

