<?php
$db = mysqli_connect('localhost','root','','teacher');

if(isset($_POST))
{
	$firstname 		= $_POST['first_name'];
	$lastname 		= $_POST['last_name'];
	$address		= $_POST['address'];
	$email 			= $_POST['Email'];
	$phonenumber	= $_POST['phoneNumber'];
	$qualification  = $_POST['qualification'];
	$dept			= $_POST['dept'];
	$password 		= $_POST['username_pass'];


	$sql_E = "SELECT * FROM teacher_data WHERE Email = '$email' ";

	$result = mysqli_query($db,$sql_E);

	if(mysqli_num_rows($result)>0)
	{
		header("LOCATION: add_teacher.php?error=oops...Teacher already exist") ;
		exit();
	}
	else
	{
		$query = "INSERT INTO teacher_data(first_name, last_name, address, Email, phoneNumber, qualification,dept, username_pass ) VALUES('$firstname','$lastname','$address','$email','$phonenumber','$qualification','$dept','$password')";
		$result2 = mysqli_query($db,$query);
		if($result2)
		{

			header("Location:admin_login_main.html?erro= Teacher added succefully in the DataBase");
		}
		else
		{
			header("Location: add_teacher.php?error=unknown error occurred");
		}			

	}

}
?>