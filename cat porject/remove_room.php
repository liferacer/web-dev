<?PHP
session_start();
echo "<body background=\"pic2.jpg\">";
echo "<h1 align=center color=blue size =+2> EXAM HALL MODIFY PROCESS</h1>";
echo "<br><hr><br>";
if (isset($_POST['roomnum']))
{
	$room_num=$_POST['roomnum'];
	if (isset($_SESSION['loginname']))
	{
		$con=mysql_connect("localhost","root","") or die(mysql_error());
		$db=mysql_select_db("cat",$con) or die(mysql_error());
		$query ="delete from class where classnum = '".$room_num."'";
		mysql_query($query,$con) or die(mysql_error());
		echo "<font size=+2> $room_num Removed from list";
	}
	else
	{
			die( "</font><font size=+2> Sorry, You are not authorized user. Please <b>Login </b>properly </font>");	

	}

}
else
{
	echo "</font><font size=+2> No room was selected. Pl select a room";	
	echo "<form action= \"remove_exam_hall.php\">";
		echo "<input type=submit value=\"CONTINUE\" style=\"width:200px; height:50px; font-size:100%;color:green\">";
		echo "</font></form></html>";

}
		
echo "<form action= \"exam_hall_process.php\">";
	echo "<font size=+2><input type=submit value=\"<< MENU\" style=\"width:200px; height:50px; font-size:100%;color:green\">";
	echo "</font></form></html>";
	

?>