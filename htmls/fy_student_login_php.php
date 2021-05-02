<?php
session_start();

$sname = "localhost";
$username="root";
$pass = "";
$db_name= "fy_stud";
$conn = mysqli_connect($sname,$username,$pass,$db_name);

if (!$conn)
 {
    echo "Connection failed!";
}
if (isset($_POST['seat_no']))
{ 
    function validate($data)
    {
        $data = trim($data);
    
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $seat_no = validate($_POST['seat_no']);
    

    if(empty($seat_no))
    {
        header("Location: fy_student_login.php?error= seat_no is required");
        exit();
    }       
       
        else
        {
            $sql = "SELECT * FROM fy_stud_data WHERE seat_no = '$seat_no'";

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)===1)
            {
                $row = mysqli_fetch_assoc($result);

                if($row['seat_no'] === $seat_no)
                {
                   $_SESSION['seat_no'] = $row['seat_no'];
                    //$_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: fy_student_marksheet_all.php");
                    exit();    
                }
                
            }

            else
            {
                header("Location: fy_student_login.php?error=Invalid seat no ");
                exit();   
            }
        }
}






?>
