<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
    <link rel="stylesheet" href="../css/add_teacher.css" />
</head>
<body>

    
      <div class="header">
        <ul>
          <li><a href="admin_login_main.html">Previous Page</a></li>
        </ul>
      </div>


    
    <div class="regform">
        <h1>Add Teacher</h1>
    </div>
    
    <div class="main">

        <form action="add_teacher_php.php" method="POST">
            <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

            <div id="name">
                <h2 class="name">
                Name </h2>
                <input class="firstname" type="text" name="first_name" required=""><br>
                <label class="firstlabel">first name</label>
                <input class="lastname" type="text" name="last_name" required=""><br>
                <label class="lastlabel">last name</label>
            </div>
            
            <h2 class="name">
            Address </h2>
            <input class="address" type="text" name="address" required="">
           
            <h2 class="name">
            Email</h2>
            <input class="email" type="email" name="Email" required="">
    
            <h2 class="name">
            Phone</h2>
            <input class="number" type="text" name="phoneNumber" required="" maxlength="10">
            <label class="phone-number">Phone Number</label>

            <h2 class="name">
            Qualification</h2>
            <input class="address" type="text" name="qualification" required="">

            <h2 class="name">
            Department</h2>
            <input class="address" type="text" name="dept" placeholder="" required="">

            <h2 class="name">
            Password</h2> 
            <input class="firstname" type="Password" name="username_pass" required=""><br>
            

            <button type="submit" name="submit">Add Teacher</button>


        </form>
    </div>



</body>
</html>