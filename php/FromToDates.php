<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);
echo "Next coming Saturdays are :";
while ($startdate < $enddate) {
  echo date("M d", $startdate)."<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>