 <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mydb", $con);
$result = mysql_query("Select * from book_name");
echo "<table border='1'>
<tr>
<th>Book name</th>
<th>Author name</th>
<th>Price </th>
</tr>";
while($row = mysql_fetch_array($result))
   {
	echo "<tr>";
   	echo "<td>" . $row['bookname']. "</td>";
  	echo "<td> " . $row['authorname']."</td> ";
	echo "<td>" . $row['price']."</td>";
   	echo "</tr>";
}

echo "</table>";
mysql_close($con);
?> 