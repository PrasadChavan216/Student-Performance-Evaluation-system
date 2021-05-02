<?php
if(isset($_GET['id']))
{
	$db = mysqli_connect('localhost','root','','teacher');
	 function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM teacher_data
	        WHERE id=$id";
   $result = mysqli_query($db, $sql);
   if ($result) {
   	  header("Location: teacher_list.php?success=successfully deleted");
   }else {
      header("Location: teacher_list.php?error=unknown error occurred&$user_data");
   }

}
else
{
	header("Location: teacher_list.php");
}




?>