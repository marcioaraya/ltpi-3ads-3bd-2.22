<?php

function tabuada_v1(){
    $n = 2;
    $i = 1;
    echo '<p>'. $n . ' x ' . $i . ' = ' . $n*$i . '</p>';
    $i = $i + 1;
    echo '<p>'. $n . ' x ' . $i . ' = ' . $n*$i . '</p>';
    $i = $i + 1;
    echo '<p>'. $n . ' x ' . $i . ' = ' . $n*$i . '</p>';
    $i = $i + 1;
    echo '<p>'. $n . ' x ' . $i . ' = ' . $n*$i . '</p>';
    $i = $i + 1;
    echo '<p>'. $n . ' x ' . $i . ' = ' . $n*$i . '</p>';
    $i = $i + 1;
    echo '<p>'. $n . ' x ' . $i . ' = ' . $n*$i . '</p>';
    $i = $i + 1;
    echo '<p>'. $n . ' x ' . $i . ' = ' . $n*$i . '</p>';
    $i = $i + 1;
    echo '<p>'. $n . ' x ' . $i . ' = ' . $n*$i . '</p>';
    $i = $i + 1;
    echo '<p>'. $n . ' x ' . $i . ' = ' . $n*$i . '</p>';
    $i = $i + 1;
    echo '<p>'. $n . ' x ' . $i . ' = ' . $n*$i . '</p>';
}

function tabuada_v2($n){
    for($i = 0; $i <=10; $i++){
        echo '<p>'. $n . ' x ' . $i . ' = ' . $n*$i . '</p>';
    }
}

// chamada da função
# tabuada_v2(2);