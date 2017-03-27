<!DOCTYPE HTML>  
<html>
<head><title>formEg3</title>
<style>
.error {color: red;}
</style>
</head>
<body>  
<?php
$nameErr = $regnoErr = "";
if(isset($_POST["submit"])&& $_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";  } 

/*The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
^start of the line
$ end of the line 
preg_match("/^[a-zA-Z]*$/",$var] ---> 0 if any  special chars is present
preg_match("/^[a-zA-Z]*$/",$var] ---> 1 if only a-zA-Z is present*/

  else if (!preg_match("/^[a-zA-Z]*$/",$_POST["name"])) {
     $nameErr = "Only alphabets are allowed";}
  else { 
    $name = test_input($_POST["name"]);
    echo "<h2>Your Input:</h2>";
	echo $name;  }
    if (empty($_POST["regno"])) {
    $regnoErr = "Regno is required";}  
  else if (!preg_match("/^[a-zA-Z0-9]*$/",$_POST["regno"])) {
     $regnoErr = "Only alpha numeric are allowed";}
  else {
    $regno = test_input($_POST["regno"]);
    echo "<br>";
	echo $regno;
  }}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="formEg3.php">  
  Name : <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Regno: <input type="text" name="regno">
  <span class="error">* <?php echo $regnoErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>
