<?php

//array_slice(array,start,length,preserve)
//-2 second last element 
//true preserve, false reset - default

$input = array("a", "b", "c", "d", "e","f");

$output = array_slice($input, 2);// returns "c", "d", and "e"
print_r($output);
echo "<br>";

$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"
print_r($output);
echo "<br>";

// note the differences in the array keys
print_r(array_slice($input, 2, -1));
echo "<br>";
print_r(array_slice($input, 2, -1, true));
echo "<br>";
?>
