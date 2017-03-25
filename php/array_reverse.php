<?php
$input  = array("php", 4.0, "red"=>"r", "green"=>"g");
$result = array_reverse($input);
$result1 = array_reverse($input,true);
print_r($result);
echo "<br>";
print_r($result1)
?>
