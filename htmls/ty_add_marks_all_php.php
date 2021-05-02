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
		$sql = "SELECT * FROM ty_stud_data WHERE id=$id";
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
		
		$in_spm 	= validate($_POST['in_spm']);
		$in_iot		= validate($_POST['in_iot']);
		$in_awp 	= validate($_POST['in_awp']);
		$in_ai 		= validate($_POST['in_ai']);
		$in_ngt 	= validate($_POST['in_ngt']);

		$p_spm 		= validate($_POST['p_spm']);
		$p_iot 		= validate($_POST['p_iot']);
		$p_awp 		= validate($_POST['p_awp']);
		$p_ai 		= validate($_POST['p_ai']);
		$p_ngt 		= validate($_POST['p_ngt']);

		$te_spm 	= validate($_POST['te_spm']);
		$te_iot 	= validate($_POST['te_iot']);
		$te_awp 	= validate($_POST['te_awp']);
		$te_ai 		= validate($_POST['te_ai']);
		$te_ngt 	= validate($_POST['te_ngt']);

		$in_sqa 	= validate($_POST['in_sqa']);
		$in_sic		= validate($_POST['in_sic']);
		$in_bi 		= validate($_POST['in_bi']);
		$in_itsm 	= validate($_POST['in_itsm']);
		$in_en 		= validate($_POST['in_en']);

		$p_sqa 		= validate($_POST['p_sqa']);
		$p_sic 		= validate($_POST['p_sic']);
		$p_bi 		= validate($_POST['p_bi']);
		$p_itsm 	= validate($_POST['p_itsm']);
		$p_en 		= validate($_POST['p_en']);

		$te_sqa 	= validate($_POST['te_sqa']);
		$te_sic 	= validate($_POST['te_sic']);
		$te_bi 		= validate($_POST['te_bi']);
		$te_itsm 	= validate($_POST['te_itsm']);
		$te_en 		= validate($_POST['te_en']);

		$id 		= validate($_POST['id']);

		$sql = "UPDATE  ty_stud_data SET seat_no='$seat_no', in_spm='$in_spm', in_iot='$in_iot', in_awp='$in_awp',in_ai='$in_ai', in_ngt='$in_ngt', p_spm='$p_spm', p_iot='$p_iot', p_awp='$p_awp', p_ai='$p_ai', p_ngt='$p_ngt',te_spm='$te_spm', te_iot='$te_iot', te_awp='$te_awp',te_ai='$te_ai',te_ngt='$te_ngt',in_sqa='$in_sqa',in_sic='$in_sic',in_bi='$in_bi',in_itsm='$in_itsm',in_en='$in_en',p_sqa='$p_sqa',p_sic='$p_sic',p_bi='$p_bi',p_itsm='$p_itsm',p_en='$p_en',te_sqa='$te_sqa',te_sic='$te_sic',te_bi='$te_bi',te_itsm='$te_itsm',te_en='$te_en' WHERE seat_no='$seat_no'";

		$result2 = mysqli_query($db,$sql);
		if($result2)
		{

			header("Location:ty_student_list.php?error= Student Marks added succefully in the DataBase");
		}

 }
 