<?PHP
session_start();
echo "<body background =\"pic2.jpg\">";
if (isset($_POST['roomnum']))
{
$room_number =$_POST['roomnum'];
$room_capacity=$_POST['roomcapacity'];
settype($room_capacity,'integer');
	if (isset($_SESSION['loginname']))
	{
		echo "<body background=\"pic2.jpg\">";
		echo "<h1 align=center color=blue size =+2> EXAM HALL MODIFY PROCESS</h1>";
		echo "<br><hr><br>";
		$con=mysql_connect("localhost","root","") or die(mysql_error());
		$db=mysql_select_db("cat",$con) or die(mysql_error());
		$query="update class set capacity = ".$room_capacity." where classnum = '". $room_number. "'";
		$update_rec_set= mysql_query($query,$con) or die(mysql_error());
		echo "Updated ".$room_number."'s capacity as ".$room_capacity."<br>";
		

	}
		else
	{
			die( "<font size=+2> Sorry, You are not authorized user. Please <b>Login </b>properly</font>");
	
	}
}
else

{
	echo "</font><font size=+2> No room was selected. Pl select a room";	
	echo "<form action= \"modify_exam_hall.php\">";
		echo "<input type=submit value=\"CONTINUE\" style=\"width:200px; height:50px; font-size:100%;color:green\">";
		echo "</font></form></html>";
}
	echo "<form action= \"exam_hall_process.php\">";
		echo "<input type=submit value=\"<< MENU\" style=\"width:200px; height:50px; font-size:100%;color:green\">";
		echo "</font></form></html>";
	

?>
