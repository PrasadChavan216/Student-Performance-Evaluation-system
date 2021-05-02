<?php
if(isset($_GET['id']))
{
	$db = mysqli_connect('localhost','root','','admin_log');
	 function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM contact
	        WHERE id=$id";
   $result = mysqli_query($db, $sql);
   if ($result)
    {
   	  header("Location: contact_person.php?success=successfully deleted");
    }
    else 
    {
       header("Location: contact_person.php?error=unknown error occurred&$user_data");
    }

}





?>