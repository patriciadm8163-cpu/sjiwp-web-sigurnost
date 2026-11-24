<?php
$dani=["ponedeljak","utorak","srijeda","četvrtak","petak","subota","nedelja"];

echo $dani[0];
echo "<br>";
echo $dani[6];
echo "<br>";
echo count($dani)-1;

foreach($dani as $dani){
    echo "<li> $dani <li>";
}
foreach($dani as $indeks => $dan){
    echo ($indeks+1).". $dan<br>";
}
?>