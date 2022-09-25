<?php
$x[0][0]=15;
$x[0][1]=6;
$x[1][0]=2;
$x[1][1]=5;

echo "<table border=\"1\">";
foreach($x as $v){
    echo "<tr>";
    foreach($v as $z){
        echo "<td>$z</td>";
    }
    echo "</tr>";
}
echo "</table>";