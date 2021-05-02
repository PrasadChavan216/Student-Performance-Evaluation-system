<?php
session_start();

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "teacher";

$conn = mysqli_connect($sname,$uname,$password,$db_name);

if(!$conn)
{
	echo "connection failed..!";
}


if(isset($_POST['email']) && isset($_POST['password']))
{
	

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;

}

	$email = validate($_POST['email']);
	$pass  = validate($_POST['password']);

	if(empty($email))
	{
		header("Location: teacher_login.php?error=email is required");
		exit();
	}
	else if(empty($pass))
	{
		header("Location: teacher_login.php?error=password is required");
		exit();
	}
	else
	{
		$sql= "SELECT * FROM teacher_data WHERE Email = '$email ' AND username_pass = '$pass'";

		$result = mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result) === 1)
		{
			$row = mysqli_fetch_assoc($result);
			
			if($row['Email']===$email && $row['username_pass']===$pass)
			{
				$SESSION['Email'] = $row['Email'];
				$SESSION['first_name'] = $row['first_name'];
				$SESSION['id'] = $row['id'];
				header("Location: teacher_login_main.php");
				exit();


			}
			else
			{
				header("Location: teacher_login.php?error= Incorect Email_ID OR Password");
				exit();
			}


		}
		else
		{
			header("Location: teacher_login.php?error= Incorect Email_ID OR Password");
			exit();
		}
	}
}



?>
