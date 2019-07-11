<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	</head>
	<style>
		.error{
			color:red;
		}
	</style>
<body>
	<?php
$nameErr=$emailErr=$genderErr = $websiteErr ="";
$name= $email =$gender =$comment =$website ="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}


function test_input($data){
	$data =trim($data);
	$data =stripslashes($data);
	$data =htmlspecialchars($data);
	return $data;
}

?>

	<div class="login-box">
    <form method="POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<h1>Login here</h1>
		<b><label>Name</label></b>
<input type="text" name="username" placeholder="enter username" value="<?php echo $name;?>">
                 <span class="error">*<?php echo $nameErr;?></span>
		    	<br><br>

		    	<b><label>E-mail</label></b>
		    	<input type="email" name="email" placeholder="enter you email address" value="<?php echo $email;?>">
		    	<span class="error">*<?php echo $emailErr;?></span>
		    	<br><br>
		<b><label>Comment</label></b>
		<textarea name="comment"></textarea><br><br>
       <b>Select gender </b><input type="radio" name="Gender">Male
      <input type="radio" name="Gender">Female
       <input type="radio" name="Gender">Other<br><br><br>

		    	
		    	<input type="submit" name="submit" value="Submit"><br><br>
		    </form>

    </div>

</body>


<h2> Your output</h2>
<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>




</html>