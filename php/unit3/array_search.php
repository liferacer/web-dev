<?php
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
echo $key."<br>";
$key = array_search('red', $array);   // $key = 1;
echo $key."<br>";
?>
