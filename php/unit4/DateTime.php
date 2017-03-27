<?php 
/*date(format,timestamp)*/
echo "Today is " . date("Y/m/d"). "<br>";
//l is for the day name
echo "Its a " . date("l"). "<br>";
//s --> seconds a-->am or pm
echo "The time is " . date("h:i:sa"). "<br>";
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>