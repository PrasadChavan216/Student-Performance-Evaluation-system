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
		$sql = "SELECT * FROM sy_stud_data WHERE id=$id";
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
		
		$in_py 		= validate($_POST['in_py']);
		$in_ds		= validate($_POST['in_ds']);
		$in_cn 		= validate($_POST['in_cn']);
		$in_dbms 	= validate($_POST['in_dbms']);
		$in_am 		= validate($_POST['in_am']);

		$p_py 		= validate($_POST['p_py']);
		$p_ds 		= validate($_POST['p_ds']);
		$p_cn 		= validate($_POST['p_cn']);
		$p_dbms 	= validate($_POST['p_dbms']);
		$p_am 		= validate($_POST['p_am']);

		$te_py 		= validate($_POST['te_py']);
		$te_ds 		= validate($_POST['te_ds']);
		$te_cn 		= validate($_POST['te_cn']);
		$te_dbms 	= validate($_POST['te_dbms']);
		$te_am 		= validate($_POST['te_am']);

		$in_java 	= validate($_POST['in_java']);
		$in_em		= validate($_POST['in_em']);
		$in_se 		= validate($_POST['in_se']);
		$in_cg 		= validate($_POST['in_cg']);
		$in_cost 	= validate($_POST['in_cost']);

		$p_java 	= validate($_POST['p_java']);
		$p_em 		= validate($_POST['p_em']);
		$p_se 		= validate($_POST['p_se']);
		$p_cg 		= validate($_POST['p_cg']);
		$p_cost 	= validate($_POST['p_cost']);

		$te_java 	= validate($_POST['te_java']);
		$te_em 		= validate($_POST['te_em']);
		$te_se 		= validate($_POST['te_se']);
		$te_cg 		= validate($_POST['te_cg']);
		$te_cost 	= validate($_POST['te_cost']);

		$id 		= validate($_POST['id']);

		$sql = "UPDATE sy_stud_data SET seat_no='$seat_no', in_py='$in_py', in_ds='$in_ds', in_cn='$in_cn',in_dbms='$in_dbms', in_am='$in_am', p_py='$p_py', p_ds='$p_ds', p_cn='$p_cn', p_dbms='$p_dbms', p_am='$p_am',te_py='$te_py', te_ds='$te_ds', te_cn='$te_cn',te_dbms='$te_dbms',te_am='$te_am',in_java='$in_java',in_em='$in_em',in_se='$in_se',in_cg='$in_cg',in_cost='$in_cost',p_java='$p_java',p_em='$p_em',p_se='$p_se',p_cg='$p_cg',p_cost='$p_cost',te_java='$te_java',te_em='$te_em',te_se='$te_se',te_se='$te_se',te_cg='$te_cg',te_cost='$te_cost' WHERE seat_no='$seat_no'";

		$result2 = mysqli_query($db,$sql);
		if($result2)
		{

			header("Location:sy_student_list.php?error= Student Marks added succefully in the DataBase");
		}

 }
 