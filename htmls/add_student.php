<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Studnet</title>
    <link rel="stylesheet" href="../css/add_student.css" />
</head>
<body>

    <head></head>
	  <div class="header">
	    <ul>
	      <li><a href="teacher_login_main.php"><u><--back</u></a></li>
	    </ul>
	  </div>
	  </header>
       <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

    <div class="container">
    <a href="fy_student_add.php">First Year </a><br>
    <a href="sy_student_add.php">Second Year </a><br>
    <a href="ty_student_add.php">Third Year </a>
    </div>

</body>
</html>]