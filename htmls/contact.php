<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/contact.css">
<title>Contact Us</title>
</head>
<body>

<header>
        <div class="header">
          <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="login_main.php">Login</a></li>
            <li><a href="about.php">About</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
          </ul>
        </div>
    </header>


<h3>Contact US</h3>

<div class="container">
  <form method="post">

    <label for="fname">First Name*</label>
    <input type="text" id="fname" name="first_name" placeholder="Your name.." required="">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="last_name" placeholder="Your last name..">

    <label for="lname">Select Year</label>
    <div class="semlist">
         <select id="sem" name ="section">
            <option disabled="" selected="" value="null">--Select--</option>
            <option value="FY" >FY</option>
            <option value="SY" >SY</option>
            <option value="TY">TY</option>
         </select>
        </div>

    <label for="lname">Email Address*</label>
    <input type="email" id="email" name="Email" placeholder="Your E-mail.." required="">

    <label for="subject">Subject*</label>
    <textarea id="subject" name="msg" placeholder="Write something.." required=""></textarea>

    <input type="submit" value="Submit" name="submit">
    
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

  </form>
</div>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
    
    $con=mysqli_connect('localhost','root','','admin_log');

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $section=$_POST['section'];
    $Email=$_POST['Email'];
    $msg=$_POST['msg'];

    $sql = "INSERT INTO contact(first_name, last_name, section, Email, msg) VALUES ('$first_name','$last_name','$section','$Email','$msg')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
      header("Location: contact.php?error= Thankyou for contacting us..!!");
      exit();
    }
}

?>