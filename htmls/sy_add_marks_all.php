<?php
	include('fy_stud_add_data.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sy Add student marks</title>
    <link rel="stylesheet" href="../css/fy_add_marks_all.css" />
    <script>
    	function disable() {
		  document.getElementById("sem").disabled=true;
		}
    </script>
</head>
<body>

  <div class="header">
    <ul>
      <li><a href="sy_student_list.php"><u><--back</u></a></li>
    </ul>
  </div>
  </header>

  <div class="regform">
    <h1>Add SY Student marks</h1>
</div>

<div class="main">

    <form action="sy_add_marks_all_php.php" method="POST">

    	<?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

    	
            <h2 class="name">
            Name </h2>
             <?php 
	            	if (isset($_GET['id']))
	            	 {
	            		$db = mysqli_connect('localhost','root','','fy_stud');
	            		
					 	function validate($data)
					 	{
					        $data = trim($data);
					        $data = stripslashes($data);
					        $data = htmlspecialchars($data);
					        return $data;
						}

						$id = validate($_GET['id']);	
	            		$sql = "SELECT * FROM sy_stud_data WHERE id = '$id' ";
	            	
	            		$result = mysqli_query($db,$sql);
     

	            		if(mysqli_num_rows($result)>0)
	            		{
	            			$rows = mysqli_fetch_assoc($result);
	            		}
            	 	}
            	 	 ?>
           <input class="firstname" type="text" name="first_name" value="<?=$rows['first_name']?>">
            
           

            <br>

            <h2 class="name">
        	Seat Number </h2>
        	<input class="firstname" id="cap" onblur="mycapital()" type="text" name="seat_no" value="<?=$rows['seat_no']?>" >

        	<br>


        	<!-- Sem List -->
        	<h2 class="name">
        	Select Semester </h2>
        	<div class="semlist">
        	<select id="sem">
        		<option disabled="" selected="">--Select--</option>
        		<option value="sem1" >SEM III</option>
        		<option value="sem2">SEM IV</option>
        	</select>
        </div>

        	

<div class="sem-details">

           	<div class="sem1 detail">

        	<h2 class="name">
        	Select exam </h2>
        	<div class="examlist">

        	<select id="exam" >
        		<option disabled="" selected="">--Select--</option>
        		<option value="internal">Internal Exam</option>
        		<option value="practical">Practical Exam</option>
        		<option value="theory">Theory Exam</option>
        	</select>
        </div>

        	
        		
        		<div class="internal details">
	        	
		        	<h2 class="name">
		            Semester III</h2> 
		            <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		            
		        <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Python Programming</td>
                    <td><input class="obt_marks" type="text" name="in_py" value="<?=$rows['in_py']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Data Structures</td>
                    <td><input class="obt_marks" type="text" name="in_ds" value="<?=$rows['in_ds']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Computer Networks</td>
                    <td><input class="obt_marks" type="text" name="in_cn" value="<?=$rows['in_cn']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Database Management Systems</td>
                    <td><input class="obt_marks" type="text" name="in_dbms" value="<?=$rows['in_dbms']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Applied Mathematics</td>
                    <td><input class="obt_marks" type="text" name="in_am" value="<?=$rows['in_am']?>"></td>
                    <td>20</td>
                </tr>
            </table>
	        </div>

	        <div class="practical details">
	        	
		        	<h2 class="name">
		            Semester III</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Python Programming</td>
                    <td><input class="obt_marks" type="text" name="p_py" value="<?=$rows['p_py']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Data Structures</td>
                    <td><input class="obt_marks" type="text" name="p_ds" value="<?=$rows['p_ds']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Computer Networks</td>
                    <td><input class="obt_marks" type="text" name="p_cn" value="<?=$rows['p_cn']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Database Management Systems</td>
                    <td><input class="obt_marks" type="text" name="p_dbms" value="<?=$rows['p_dbms']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Applied Mathematics</td>
                    <td><input class="obt_marks" type="text" name="p_am" value="<?=$rows['p_am']?>" ></td>
                    <td>50</td>
                </tr>
            </table>
	        </div>

	        <div class="theory details">
	        	
		        	<h2 class="name">
		            Semester III</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Python Programming</td>
                    <td><input class="obt_marks" type="text" name="te_py" value="<?=$rows['te_py']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Data Structures</td>
                    <td><input class="obt_marks" type="text" name="te_ds" value="<?=$rows['te_ds']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Computer Networks</td>
                    <td><input class="obt_marks" type="text" name="te_cn" value="<?=$rows['te_cn']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Database Management Systems</td>
                    <td><input class="obt_marks" type="text" name="te_dbms" value="<?=$rows['te_dbms']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Applied Mathematics</td>
                    <td><input class="obt_marks" type="text" name="te_am" value="<?=$rows['te_am']?>"></td>
                    <td>75</td>
                </tr>
            </table>
	        </div>

	     </div>


	     <!--Sem I end here -->

	     <div class="sem2 detail">

        	<h2 class="name">
        	Select exam </h2>
        	<div class="examlist">
        	<select id="exams">
        		<option disabled="" selected="">--Select--</option>
        		<option value="internal">Internal Exam</option>
        		<option value="practical">Practical Exam</option>
        		<option value="theory">Theory Exam</option>
        	</select>
        </div>
        	
        		
        		<div class="internal detailed">
	        	
		            <h2 class="name">
		            Semester IV</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Core Java</td>
                    <td><input class="obt_marks" type="text" name="in_java" value="<?=$rows['in_java']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Introduction to Embbeded Systems</td>
                    <td><input class="obt_marks" type="text" name="in_em" value="<?=$rows['in_em']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Software Engineering</td>
                    <td><input class="obt_marks" type="text" name="in_se" value="<?=$rows['in_se']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Computer Graphics and Animation</td>
                    <td><input class="obt_marks" type="text" name="in_cg" value="<?=$rows['in_cg']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Computer Oriented Statistical Techniques</td>
                    <td><input class="obt_marks" type="text" name="in_cost" value="<?=$rows['in_cost']?>"></td>
                    <td>20</td>
                </tr>
            </table>
	        </div>

	        <div class="practical detailed">
	      
		           <h2 class="name">
		            Semester IV</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Core Java</td>
                    <td><input class="obt_marks" type="text" name="p_java" value="<?=$rows['p_java']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Introduction to Embbeded Systems</td>
                    <td><input class="obt_marks" type="text" name="p_em" value="<?=$rows['p_em']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Software Engineering</td>
                    <td><input class="obt_marks" type="text" name="p_se" value="<?=$rows['p_se']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Computer Graphics and Animation</td>
                    <td><input class="obt_marks" type="text" name="p_cg" value="<?=$rows['p_cg']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Computer Oriented Statistical Techniques</td>
                    <td><input class="obt_marks" type="text" name="p_cost" value="<?=$rows['p_cost']?>"></td>
                    <td>50</td>
                </tr>
            </table>
	        </div>

	        <div class="theory detailed">
	        	
		           <h2 class="name">
		            Semester IV</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Core Java</td>
                    <td><input class="obt_marks" type="text" name="te_java" value="<?=$rows['te_java']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Introduction to Embbeded Systems</td>
                    <td><input class="obt_marks" type="text" name="te_em" value="<?=$rows['te_em']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Software Engineering</td>
                    <td><input class="obt_marks" type="text" name="te_se" value="<?=$rows['te_se']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Computer Graphics and Animation</td>
                    <td><input class="obt_marks" type="text" name="te_cg" value="<?=$rows['te_cg']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Computer Oriented Statistical Techniques</td>
                    <td><input class="obt_marks" type="text" name="te_cost" value="<?=$rows['te_cost']?>"></td>
                    <td>75</td>
                </tr>
            </table>
	        </div>

	     </div>


	 </div>
	 <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >
	 
	 <button type="submit" name="submit">Add Marks</button>

</form>
<script src="https://code.jquery.com/jquery-2.2.4.js" 
integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" 
crossorigin="anonymous"></script>
<script>

	$(document).ready(function(){
		$("#sem").change(function(){
			var imp = $("#sem").val();
			$(".detail").hide();
			$("."+imp).show();
		})
	})


	$(document).ready(function(){
		$("#exam").change(function(){
			var imp = $("#exam").val();
			$(".details").hide();
			$("."+imp).show();
		})
	})

	$(document).ready(function(){
		$("#exams").change(function(){
			var imp = $("#exams").val();
			$(".detailed").hide();
			$("."+imp).show();
		})
	})
</script>
</body>
</html>