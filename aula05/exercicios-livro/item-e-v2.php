<?php
$p[0]["nome"] = "Manoel";
$p[0]["idade"] = 25;
$p[1]["nome"] = "Maria";
$p[1]["idade"] = 50;
$p[2]["nome"] = "Catarina";
$p[2]["idade"] = 44;
$p[3]["nome"] = "Carlos";
$p[3]["idade"] = 15;
$i = -1;
$c = -1;
foreach($p as $id => $s){
    if ($s["idade"]>$i){
        $i = $s["idade"];
        $c = $id;
    }
}
echo $p[$c]["nome"];