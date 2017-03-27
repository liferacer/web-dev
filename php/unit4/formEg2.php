


<!DOCTYPE HTML>  
<html>
<head><title>formEg2</title>
<style>
.error {color: red;}
</style>
</head>
<body>  
<?php

/*uses the html and php codein same file*/


$nameErr = $emailErr = "";
/*isset is required to check whether the form is submitted so that it will get submit value*/
/*_SERVER["REQUEST_METHOD"] is used to check whether the form is submitted with POST method so that the POST array will have values, not empty*/


if(isset($_POST['submit'])&&$_SERVER["REQUEST_METHOD"] == "POST") {
//empty function checks for empty
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {

/*test_input function - trim($data) will strip unnecessary characters (extra space, tab, newline) from the user input data.
stripslashes($data) will remove backslashes () from the user input data. 
htmlspecialchars($data) converts special characters to HTML entities.*/

    $name = test_input($_POST["name"]);
    echo "<h2>Your Input:</h2>";
	echo $name;
  }
    if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    echo "<br>";
	echo $email;
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
<form method="post" action="formEg2.php">  
  Name : <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>
