<?php
$number = array(1,2,3,4,5);
echo "Print the values of array<br>";
foreach($number as $b)
echo $b."<br>";
echo "Print the values along with index of array<br>";
foreach($number as $key=>$b)
echo "[".$key."]".$b."<br>";
?>