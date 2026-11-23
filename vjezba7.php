
<?php

for ($i=1; $i<=10;$i++){
    echo "$i ";
}
echo"<br>";
for ($i=2; $i<=20; $i+=2) {
    echo "$i ";
}
echo"<br>";
for ($i=10; $i>=1;$i--){
    echo "$i ";
}
echo "Start!";
echo"<br>";
$zbroj=0;
for ($i=1; $i<=100; $i++) {
    $zbroj+=$i;
}
echo "Zbroj brojeva od 1 do 100 je: $zbroj" ;

echo"<br>";
$z=0;
for($i=1; $i<=4; $i++){
    $z+=$i*2;
    echo "$z ";
}
$brzina=1000; 
$sekundeUGodini=365 * 24 * 60 * 60; 
$n=1;

while((10**$n)/$brzina<=$sekundeUGodini){
    $n++;
}
echo "Najmanji broj znamenki: $n" ;
echo"<br>";
for($i=1; $i<=10;$i++){
    if($i%3===0){
        continue;
    }
    if($i>7){
        break;
    }
    echo "$i ";
}

?>