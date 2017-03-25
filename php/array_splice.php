<?php
$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);
print_r($input);
// $input is now array("red", "green")
?>