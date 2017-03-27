<?php
//Finds the position of the last occurrence of a string inside another string //(case-sensitive)
$path = "/usr/local/apache";
//find last slash
$pos = strrpos($path, "/");
//print everything after the last slash
print(substr($path, $pos+1));
?>