<?php
session_start();
if (isset($_SESSION['loginname']))
{
echo "<body background=\"pic2.jpg\">";
echo "<h1 align=center color=blue size =+2> EXAM HALL PROCESS</h1>";
echo "<br><hr><br>";
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db = mysql_select_db("cat",$con) or die(mysql_error());
$query = "select classnum,capacity from class order by classnum";
$class_rec_set=mysql_query($query) or die(mysql_error());
echo "<form action=\"modify_room.php\" method =post>";
echo "<font size=+2>Exam Halls: <br><select name=\"roomnum\" size=5> ";
while ($class_rec = mysql_fetch_assoc($class_rec_set))
	
	echo "<option value='".$class_rec['classnum']."'> ". $class_rec['classnum'];
echo "</select>";
echo "<br>Capacity: <input type=radio name=\"roomcapacity\" value =40 checked>40";
echo "<input type=radio name=\"roomcapacity\" value =60 >60<br>";
echo "<input type = submit value =\"UPDATE\" style=\"width:200px; height:50px; font-size:100%;color:green\"></FORM>";
echo "<form action= \"exam_hall_process.php\">";
echo "<input type=submit value=\"<< CANCEL\" style=\"width:200px; height:50px; font-size:100%;color:green\">";
echo "</font></form></html>";

mysql_close($con);
}
else
echo "<font size=+2> Sorry, You are not authorized user. Please <b>Login </b>properly</font>";
?>