<?php
session_start();
if (isset($_SESSION['loginname']))
{
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db = mysql_select_db("cat",$con) or die(mysql_error());
$query="select classnum,capacity  from class order by classnum";
$class_rec_set = mysql_query($query,$con) or die(mysql_error());
echo "<body background=\"pic2.jpg\">";
echo "<form action= \"exam_hall_process.php\">";
echo "<input type=submit value=\"<< GO BACK\" style=\"width:200px; height:50px; font-size:100%;color:green\">";
echo "</font></form></b></html>";
echo "<h1 align=center><font color=blue>EXAM ROOM DETAILS</H1>";
echo "<font size=+2 color=maroon>";
echo "<table border=1 style =\"font-size:+25\" align=center><b><tr><th>S. No.</th><th> ROOM NUMBER</th><th> CAPACITY</th></tr>";
$count=0;
while($class_rec = mysql_fetch_assoc($class_rec_set))
{
	$count++;
	echo "<tr align=center><td>$count</td><td>",$class_rec['classnum'],"</td><td>",$class_rec['capacity'], "</td></tr>";
}
echo "</table><br><br>";
echo "<form action= \"exam_hall_process.php\">";
echo "<input type=submit value=\"<< GO BACK\" style=\"width:200px; height:50px; font-size:100%;color:green\">";
echo "</font></form></b></html>";
mysql_close($con);
}
else
echo "<font size=+2> Sorry, You are not authorized user. Please <b>Login </b>properly";

?>