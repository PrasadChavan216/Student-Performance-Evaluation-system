<?php
if(isset($_GET['id']))
{
	$db = mysqli_connect('localhost','root','','fy_stud');
	 function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM sy_stud_data
	        WHERE id=$id";
   $result = mysqli_query($db, $sql);
   if ($result) {
   	  header("Location: sy_student_list.php?success=successfully deleted");
   }else {
      header("Location: sy_student_list.php?error=unknown error occurred&$user_data");
   }

}
else
{
	header("Location: sy_student_list.php");
}




?>