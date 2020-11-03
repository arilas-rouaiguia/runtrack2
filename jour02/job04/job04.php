<?php

$depart = -1;
$resu = 100;

while($depart < $resu) {
$depart = $depart + 1;
echo "</br>$depart";

if($depart % 3 == 0){
echo 'Fizz';
}

if($depart % 5 == 0){
echo 'Buzz';
}
}
?>