<?php
$food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));

//0 - Default. Does not count all elements of multidimensional arrays
//1 - Counts the array recursively (counts all the elements of multidimensional arrays)
// recursive count
echo count($food, COUNT_RECURSIVE); // output 8

// normal count
echo count($food); // output 2

?>
