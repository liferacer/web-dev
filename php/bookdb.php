<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
echo "connected sucessfully";



mysql_select_db("mydb", $con);
$bn=$_POST['bn'];
$an=$_POST['an'];
$pr=$_POST['pr'];
$result = mysql_query("insert into book_name values('$bn','$an',$pr)");
mysql_close($con);
?> 