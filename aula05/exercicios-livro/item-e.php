<?php
$p[0]["nome"] = "Joaquim";
$p[0]["idade"] = 30;
$p[1]["nome"] = "Lindalva";
$p[1]["idade"] = 26;
$p[2]["nome"] = "Ribamar";
$p[2]["idade"] = 44;
$i = -1;
$c = -1;
foreach($p as $id => $s){
    if ($s["idade"]>$i){
        $i = $s["idade"];
        $c = $id;
    }
}
echo $p[$c]["nome"];
