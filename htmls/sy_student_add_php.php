<?php
 require_once('fy_stud_add_data.php');
 ?>
<?php
 

 if(isset($_POST))
{
	$firstname 		= $_POST['first_name'];
	$lastname 		= $_POST['last_name'];
	$address		= $_POST['address'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phone'];
	$seat_no 		= $_POST['seat_no'];
	

		 $sql_E = "SELECT * FROM sy_stud_data WHERE seat_no = '$seat_no' ";

	$result = mysqli_query($db,$sql_E);

	if(mysqli_num_rows($result)>0)
	{
		header("LOCATION: sy_student_add.php?error=oops...Student already exist") ;
		exit();
	}
	else
	{

	
		$query = "INSERT INTO sy_stud_data(first_name, last_name, address, email, phone, seat_no ) VALUES('$firstname','$lastname','$address','$email','$phonenumber','$seat_no')";
		$result2 = mysqli_query($db,$query);
		if($result2)
		{

			header("Location:sy_student_add.php?error= Student added succefully in the DataBase");
		}

	}

}
?>