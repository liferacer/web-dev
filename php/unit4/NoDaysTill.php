<?php
$d1=strtotime("Oct 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of October.";
?>