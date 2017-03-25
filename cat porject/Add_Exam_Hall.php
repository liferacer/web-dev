<?php
session_start();
if (isset($_SESSION['loginname']))
{
echo "<body background=\"pic2.jpg\"><font size=+2><form action=\"add_room.php\" method=post><b>";
echo "Enter Room Number: <input type = text name=\"roomnum\">";
echo "<br><br>Room Capacity: <input type=radio name =\"roomcapacity\" value =40 checked> 40";
echo "<input type=radio name =\"roomcapacity\" value =60> 60<br><br>";
echo "<input type=submit value=\"ADD ROOM\" style=\"width:200px; height:50px; font-size:100%;color:green\"></b></form></font>";
}
else
echo "<font size=+2> Sorry, You are not authorized user. Please <b>Login </b>properly";
?>