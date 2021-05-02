<?php
 
 if(isset($_GET['id']))
 {
 	include "fy_stud_add_data.php";


 	function validate($data)
	 	{
	        $data = trim($data);
	        $data = stripslashes($data);
	        $data = htmlspecialchars($data);
	        return $data;
		}

		$id = validate($_GET['id']);
		$sql = "SELECT * FROM fy_stud_data WHERE id=$id";
	    $result = mysqli_query($db, $sql);

	    if (mysqli_num_rows($result) > 0) 
	    {
	    	$row = mysqli_fetch_assoc($result);
	    }
	   
 
 }
 else if(isset($_POST['submit']))
 {
    include "fy_stud_add_data.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

		$seat_no	= validate($_POST['seat_no']);
		$in_ip 		= validate($_POST['in_ip']);
		$in_de		= validate($_POST['in_de']);
		$in_dm 		= validate($_POST['in_dm']);
		$in_cs 		= validate($_POST['in_cs']);
		$in_os 		= validate($_POST['in_os']);

		$p_ip 		= validate($_POST['p_ip']);
		$p_de 		= validate($_POST['p_de']);
		$p_dm 		= validate($_POST['p_dm']);
		$p_cs 		= validate($_POST['p_cs']);
		$p_os 		= validate($_POST['p_os']);

		$te_ip 		= validate($_POST['te_ip']);
		$te_de 		= validate($_POST['te_de']);
		$te_dm 		= validate($_POST['te_dm']);
		$te_cs 		= validate($_POST['te_cs']);
		$te_os 		= validate($_POST['te_os']);

		$in_oops 	= validate($_POST['in_oops']);
		$in_mi		= validate($_POST['in_mi']);
		$in_wb 		= validate($_POST['in_wb']);
		$in_nm 		= validate($_POST['in_nm']);
		$in_gc 		= validate($_POST['in_gc']);

		$p_oops 	= validate($_POST['p_oops']);
		$p_mi 		= validate($_POST['p_mi']);
		$p_wb 		= validate($_POST['p_wb']);
		$p_nm 		= validate($_POST['p_nm']);
		$p_gc 		= validate($_POST['p_gc']);

		$te_oops 	= validate($_POST['te_oops']);
		$te_mi 		= validate($_POST['te_mi']);
		$te_wb 		= validate($_POST['te_wb']);
		$te_nm 		= validate($_POST['te_nm']);
		$te_gc 		= validate($_POST['te_gc']);

		$id 		= validate($_POST['id']);

		$sql = "UPDATE fy_stud_data SET seat_no='$seat_no', in_ip='$in_ip',in_de='$in_de',in_dm='$in_dm',in_cs='$in_cs',in_os='$in_os',p_ip='$p_ip',p_de='$p_de',p_dm='$p_dm',p_cs='$p_cs',p_os='$p_os',te_ip='$te_ip',te_de='$te_de',te_dm='$te_dm',te_cs='$te_cs',te_os='$te_os',in_oops='$in_oops',in_mi='$in_mi',in_wb='$in_wb',in_nm='$in_nm',in_gc='$in_gc',p_oops='$p_oops',p_mi='$p_mi',p_wb='$p_wb',p_nm='$p_nm',p_gc='$p_gc',te_oops='$te_oops',te_mi='$te_mi',te_wb='$te_wb',te_nm='$te_nm',te_gc='$te_gc' WHERE seat_no='$seat_no'";
		$result2 = mysqli_query($db,$sql);
		if($result2)
		{

			header("Location:fy_student_list.php?error= Student Marks added succefully in the DataBase");
		}

 }