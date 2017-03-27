<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table
		{ 
			border-style:solid; 
			width:50%; 
			text-align:center; 
		}
	</style>
	
</head>
<body> 
 <table> 
  <tr> 
    <th>Name</th> 
    <td><?php echo $_POST["name"]; ?><br></th> 
  </tr> 
  <tr> 
    <th>Registration Number</td> 
    <td><?php echo $_POST["regno"]; ?><br></td> 
  </tr> 
  <tr> 
    <th>Gender</th> 
    <td><?php echo $_POST["gender"]; ?><br></th> 
  </tr> 
  <tr> 
    <th>E-mail</th> 
    <td><?php echo $_POST["email"]; ?><br></th> 
  </tr> 
  <tr> 
    <th>Mobile Number</th> 
    <td><?php echo $_POST["mobile"]; ?><br></th> 
  </tr> 
  <tr> 
    <th>Branch</th> 
    <td><?php echo $_POST["branch"]; ?><br></th> 
  </tr> 
 </table> 
</body> 
</html>