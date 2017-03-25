<!DOCTYPE HTML>  
<html>
<head><title>formEg4_1</title>
<style>
.error {color: red;}
</style>
</head>
<body>  
<?php
$valid=1; 
$nameErr = $regnoErr = $phnoErr = $emailErr = "1";
$name = $regno = $phno = $email = "";
if(isset($_POST["submit"])&& $_SERVER["REQUEST_METHOD"]=="POST") {
	$name = test_input($_POST["name"]);
	$regno= test_input($_POST["regno"]);
	$phno = test_input($_POST["phno"]);
	$email = test_input($_POST["email"]);
  if (empty($name)) {	  
		$nameErr = "Name is required";
		$valid=0;  } 
  else {
	  if (!preg_match("/^[a-zA-Z]*$/",$name)) {
     $nameErr = "Only alphabets are allowed";
     $valid=0;}
	}
  if (empty($regno)) {
    $regnoErr = "Regno is required";
    $valid=0;}  
  else {
		if (!preg_match("/^[a-zA-Z0-9]*$/",$regno)) {
		$regnoErr = "Only alpha numeric are allowed";
		$valid=0;}
		}
  if (empty($phno)) {
		$phnoErr = "Ph no is required";
		$valid=0;}  
  else {
		if (!preg_match("/[0-9]{10}/",$phno)) {
		$phnoErr = "Enter ten digit ph no";
		$valid=0;}
		}
  if (empty($email)) {
		$emailErr = "Email is required";
		$valid=0;}  
  else {
		if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$email)) {
		$emailErr = "Enter a valid email addr";
		$valid=0;}
		}
  if($valid==1) {
		include('formEg4_2.php');
		exit();
		}
		}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>PHP Form Validation</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="formEg4_1.php">  
  Name : <input type="text" name="name" value="<?php echo $name?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Regno: <input type="text" name="regno" value="<?php echo $regno?>">
  <span class="error">* <?php echo $regnoErr;?></span>
  <br><br>
  Ph no : <input type="text" name="phno" value="<?php echo $phno?>">
  <span class="error">* <?php echo $phnoErr;?></span>
  <br><br>
  Email : <input type="email" name="email" value="<?php echo $email?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>
