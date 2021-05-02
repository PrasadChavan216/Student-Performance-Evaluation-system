<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TY Studnet</title>
    <link rel="stylesheet" href="../css/fy_sy_ty_add_student.css" />
</head>
<body>

    
      <div class="header">
        <ul>
          <li><a href="add_student.php">Previous Page</a></li>
        </ul>
      </div>


    
    <div class="regform">
        <h1>Add TY Student</h1>
    </div>
    
    <div class="main">

         <form action="ty_student_add_php.php" method="POST">
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
            <input class="address" type="text" name="address">
           
            <h2 class="name">
            Email</h2>
            <input class="email" type="email" name="email" required="">
    
            <h2 class="name">
            Phone</h2>
            <input class="number" type="text" name="phone" required="" maxlength="10">
            <label class="phone-number">Phone Number</label>

            <br>
             <h2 class="name">
            Seat Number</h2>
            <input class="firstname" id="cap" onblur="mycapital()" type="text" name="seat_no" required="" value="TY-">

          

            <button type="submit" name="submit">Add Student</button>


        </form>
    </div>
</body>
<script>
    function mycapital()
    {
        var x = document.getElementByID('cap');
        x.value=x.value.toUpperCase();
    }
</script>
</html>