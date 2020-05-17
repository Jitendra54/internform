<?php

 include 'database.php';





 function form()
	{
		
		if(isset($_POST['register']))
		{
				$name=$_POST['Name'];
				$email_id=$_POST['Email_Id'];
				$mobile_no=$_POST['Mobile_No'];
				$DOB=$_POST['DOB'];
				$pincode=$_POST['Pincode'];
				
				$sql = "INSERT INTO register(name,email_id,mobile_no,DOB,pincode)
				VALUES('$name','$email_id','$mobile_no','$DOB','$pincode');";
				
			mysqli_query($conn,$sql);
			
		}
		
		
	}

?>
<h1><a href="Form.php">Home</a></h1>