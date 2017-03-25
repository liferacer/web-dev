
<?php
session_start();
$username=$_POST['LoginName'];
$pwd=$_POST['PassName'];
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db("cat",$con)  or die(mysql_error());
$query="select * from admin where username = '".$username."' and password = '".md5($pwd)."'";
$rs=mysql_query($query,$con)  or die(mysql_error());
if (mysql_num_rows($rs) == 1)
{
	// HAS TO DISPLAY THE MENUS
	
	echo "<font size=+1 color=black>";
	$_SESSION["loginname"]=$username;
	echo "Hi, $username<br>";
	echo "<a href= exam_Data_Process.php target=rightframe>CAT DATA PROCESS</a><br><br>";
	echo "<a href= Exam_Hall_Process.php target=rightframe>EXAM HALL PROCESS</a><br><br>";
	echo "<a href= CAT_Document_Process.html target=rightframe>CAT DOCUMENT PROCESS</a><br><br>";
	echo "<a href= Change_Password_Process.php target=rightframe>CHANGE PASSWORD</a><br><BR>";
	echo "<a href= Logout.php> LOGOUT</a>";
}
   else
   echo "<html>Not authenticated please login again<br> <a href=login.html target=leftframe> Login</a></html>";
   mysql_close($con)  or die(mysql_error());
   ?>
