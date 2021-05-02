<?php
session_start();

$sname = "localhost";
$username="root";
$pass = "";
$db_name= "admin_log";
$conn = mysqli_connect($sname,$username,$pass,$db_name);

if (!$conn)
 {
    echo "Connection failed!";
}
if (isset($_POST['username']) && isset($_POST['password']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if(empty($username))
    {
        header("Location: admin_login.php?error= username is required");
        exit();
    }
    else
    {
        if(empty($pass))
        {
            header("Location: admin_login.php?error= password is required");
            exit();
        }
        else
        {
            $sql = "SELECT * FROM admin_data WHERE username = '$username' AND passkey = '$pass'";

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)===1)
            {
                $row = mysqli_fetch_assoc($result);

                if($row['username'] === $username && $row['passkey'] === $pass)
                {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: admin_login_main.html");
                    exit();    
                }
                
            }

            else
            {
                header("Location: admin_login.php?error= Incorrect Username or Password ");
                exit();   
            }
        }
    }

}
else
{
    header("Location: admin_login.php");
    exit();
}



?>
