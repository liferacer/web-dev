<?php
session_start();
$room_num=strtoupper($_POST['roomnum']);
$room_capacity=$_POST['roomcapacity'];
settype($room_capacity,'integer');
if (isset($_SESSION['loginname']))
{
	echo "<body background=\"pic2.jpg\"><font size =+2>";
if ($room_num <> "")
	{
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db = mysql_select_db("cat",$con) or die(mysql_error());
$query="insert into class (classnum,capacity,availability) values('".$room_num."',".$room_capacity. ",".$room_capacity.")";
$rec_set=mysql_query($query,$con) or die(mysql_error());
echo "<font size=+2 >Room Added</font>";
mysql_close($con);

	} 
	else
	{
		echo "<font size=+3> Room number is empty pl check it</font>";
		echo "<form action= \"add_exam_hall.php\">";
		echo "<input type=submit value=\" CONTINUE\" style=\"width:200px; height:50px; font-size:100%;color:green\">";
		echo "</font></form></html>";
	}
	echo "<form action= \"exam_hall_process.php\"><font size=+2>";
	echo "<input type=submit value=\"<< MENU\" style=\"width:200px; height:50px; font-size:100%;color:green\">";
	echo "</font></form></html>";
	
}
else
echo "<font size=+2> Sorry, You are not authorized user. Please <b>Login </b>properly";

?>