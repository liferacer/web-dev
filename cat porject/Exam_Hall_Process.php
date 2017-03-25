<?php
session_start();
if (isset($_SESSION['loginname']))
{
echo "<body background=\"pic2.jpg\">";
echo "<h1 align=center color=blue size =+2> EXAM HALL PROCESS</h1>";
echo "<br><hr><br>";
echo "<form action=\"view_exam_hall.php\">";
echo "<input type=submit value=\"VIEW EXAM HALL\" style=\"width:200px; height:50px; font-size:100%;color:green\">";
echo "</form>";
echo "<form action=\"add_exam_hall.php\">";
echo "<input type=submit value=\"ADD EXAM HALL\" style=\"width:200px; height:50px; font-size:100%;color:green\">";
echo "</form> <form action=\"modify_exam_hall.php\">";
echo "<input type=submit value=\"MODIFY EXAM HALL\" style=\"width:200px; height:50px; font-size:100%;color:green\"></form>";
echo "<form action=\"remove_exam_hall.php\">";
echo "<input type=submit value=\"REMOVE EXAM HALL\" style=\"width:200px; height:50px; font-size:100%;color:green\"> </form></font>";
echo "</BODY></HTML>";
}
else
echo "<font size=+2> Sorry, You are not authorized user. Please <b>Login </b>properly</font>";
?>