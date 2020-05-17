
<html>
<head>
<style>
.error {color: red}
.c {

width:353px;
padding:10px;
border-radius:5px;
border-color:grey;
font-size:15px;
float:center;

}
</style>
</head>

<body bgcolor="#fffefc">
<center>
  

<?php

$nameErr=""; $emailErr="";
$name=$mob=$mobErr=$pin=$pinErr=$dobErr=$dob=$email="";

if(isset($_POST['register']))
{
  if (isset($_POST["Name"])) {
    $name = check($_POST["Name"]);
    if (!preg_match("/^[a-zA-Z0-9_]*$/",$name)) {
      $nameErr = "Only letters,underscore and number space allowed";
    }
  }
  
  if (isset($_POST["Email_Id"])) {
    $email = check($_POST["Email_Id"]);
	if (!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/",$email)) {
      $emailErr = "Invalid email format";
    }
  }
  
  if (isset($_POST["Mobile_No"])) {
    $mob = check($_POST["Mobile_No"]);
	if (!preg_match("/^\+?[0-9]+$/",$mob)) {
      $mobErr = "Invalid mobile number";
    }
  }
  if (isset($_POST["Pincode"])) 
    $pin = check($_POST["Pincode"]);
	if (!preg_match("/^\+?[0-6]+$/",$pin)) {
      $pinErr = "Invalid pincode";
    }
  }
  
  
function check($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<h1>Register Here</h1>
<table border=0>
<form method="post" action="Register.php">  
		<tr><td>
	<b  style="size:50px;">Name : </b>
		</td><td>
		<input class="c" style="margin:5px;" name="Name" id="name" type="text" value="<?php echo $name;?>"><br>
		<div class="error"><?php echo $nameErr; ?></div>
		</td></tr>
		
		
		<tr><td>
		<b  style="size:50px;">Email_Id : </b>
		</td><td>
		<input  class="c" style="margin:5px;" name="Email_Id" id="email_idd" type="text" value="<?php echo $email;?>">
		<div class="error"><?php echo $emailErr; ?></div>
		</td></tr>
	
		<tr><td>
		<b for="mobile_no" style="size:50px;">Mobile_No :</b>
		</td><td>
		<input class="c" style="margin:5px;" name="Mobile_No" id="mobile_no" type="text" value="<?php echo $mob;?>">
		<div class="error"><?php echo $mobErr; ?></div>
		</td></tr>
	
		<tr><td>
		<b style="size:50px;">DOB : </b>
		</td><td>
		<input class="c" style="margin:5px;" name="DOB" id="DOB" type="date" value="<?php echo $dob;?>">
		<div class="error"><?php echo $dobErr; ?></div>
		</td></tr>
	
		<tr><td>
		<b for="pincode" style="size:50px;"><b>Pincode : </b>
		</td><td>
		<input class="c" style="margin:5px;" name="Pincode" id="pincode" type="text" value="<?php echo $pin;?>">
		<div class="error"><?php echo $pinErr; ?></div>
		</td></tr>
	
	
	</table><br><br>	
  <input type="submit" class="c"  style="margin:5px;" value="REGISTER" name="register">  
  <input class="c"  style="margin:5px;" type="reset" value="RESET"><br>
  
 
</form>

</body>
</html>
