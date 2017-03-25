<?php

//Create a Date From a String

$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
echo "<br>";
echo "<br>";
echo "Current date & time is :";
echo date("Y-m-d h:i:sa") . "<br>";
$d=strtotime("tomorrow");
echo "Tomorrow is :";
echo date("Y-m-d h:i:sa", $d) . "<br>";
echo "Next Saturday is :";
$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";
echo "+3 Months";
$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>