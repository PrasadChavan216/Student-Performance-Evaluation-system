<?php
	include('fy_stud_add_data.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ty Add student marks</title>
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
      <li><a href="ty_student_list.php"><u><--back</u></a></li>
    </ul>
  </div>
  </header>

  <div class="regform">
    <h1>Add TY Student marks</h1>
</div>

<div class="main">

    <form action="ty_add_marks_all_php.php" method="POST">
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
	            		$sql = "SELECT * FROM ty_stud_data WHERE id = '$id' ";
	            	
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
        		<option value="sem1" >SEM V</option>
        		<option value="sem2">SEM VI</option>
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
		            Semester V</h2> 
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
                    <td>Software Project Management</td>
                    <td><input class="obt_marks" type="text" name="in_spm" value="<?=$rows['in_spm']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Internet Of Things</td>
                    <td><input class="obt_marks" type="text" name="in_iot" value="<?=$rows['in_iot']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Advanced Web Programming</td>
                    <td><input class="obt_marks" type="text" name="in_awp" value="<?=$rows['in_awp']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Artificial Intelligence</td>
                    <td><input class="obt_marks" type="text" name="in_ai" value="<?=$rows['in_ai']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Next Generation Technologies</td>
                    <td><input class="obt_marks" type="text" name="in_ngt" value="<?=$rows['in_ngt']?>"></td>
                    <td>20</td>
                </tr>
            </table>

	        </div>

	        <div class="practical details">
	        	
		        	<h2 class="name">
		            Semester V</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Software Project Management</td>
                    <td><input class="obt_marks" type="text" name="p_spm" value="<?=$rows['p_spm']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Internet Of Things</td>
                    <td><input class="obt_marks" type="text" name="p_iot" value="<?=$rows['p_iot']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Advanced Web Programming</td>
                    <td><input class="obt_marks" type="text" name="p_awp" value="<?=$rows['p_awp']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Artificial Intelligence</td>
                    <td><input class="obt_marks" type="text" name="p_ai" value="<?=$rows['p_ai']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Next Generation Technologies</td>
                    <td><input class="obt_marks" type="text" name="p_ngt" value="<?=$rows['p_ngt']?>"></td>
                    <td>50</td>
                </tr>
            </table>

	        </div>

	        <div class="theory details">
	        	
		        	<h2 class="name">
		            Semester V</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Software Project Management</td>
                    <td><input class="obt_marks" type="text" name="te_spm" value="<?=$rows['te_spm']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Internet Of Things</td>
                    <td><input class="obt_marks" type="text" name="te_iot" value="<?=$rows['te_iot']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Advanced Web Programming</td>
                    <td><input class="obt_marks" type="text" name="te_awp" value="<?=$rows['te_awp']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Artificial Intelligence</td>
                    <td><input class="obt_marks" type="text" name="te_ai" value="<?=$rows['te_ai']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Next Generation Technologies</td>
                    <td><input class="obt_marks" type="text" name="te_ngt" value="<?=$rows['te_ngt']?>"></td>
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
		            Semester VI</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Software Quality Assurance</td>
                    <td><input class="obt_marks" type="text" name="in_sqa" value="<?=$rows['in_sqa']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Security In Computing</td>
                    <td><input class="obt_marks" type="text" name="in_sic" value="<?=$rows['in_sic']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Business Intelligence</td>
                    <td><input class="obt_marks" type="text" name="in_bi" value="<?=$rows['in_bi']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>IT Service Managemant</td>
                    <td><input class="obt_marks" type="text" name="in_itsm" value="<?=$rows['in_itsm']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Enterprise Networking</td>
                    <td><input class="obt_marks" type="text" name="in_en" value="<?=$rows['in_en']?>"></td>
                    <td>20</td>
                </tr>
            </table>
	        </div>

	        <div class="practical detailed">
	      
		           <h2 class="name">
		            Semester VI</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Software Quality Assurance</td>
                    <td><input class="obt_marks" type="text" name="p_sqa" value="<?=$rows['p_sqa']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Security In Computing</td>
                    <td><input class="obt_marks" type="text" name="p_sic" value="<?=$rows['p_sic']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Business Intelligence</td>
                    <td><input class="obt_marks" type="text" name="p_bi" value="<?=$rows['p_bi']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>IT Service Managemant</td>
                    <td><input class="obt_marks" type="text" name="p_itsm" value="<?=$rows['p_itsm']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Enterprise Networking</td>
                    <td><input class="obt_marks" type="text" name="p_en" value="<?=$rows['p_en']?>"></td>
                    <td>50</td>
                </tr>
            </table>
	        </div>

	        <div class="theory detailed">
	        	
		           <h2 class="name">
		            Semester VI</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Software Quality Assurance</td>
                    <td><input class="obt_marks" type="text" name="te_sqa" value="<?=$rows['te_sqa']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Security In Computing</td>
                    <td><input class="obt_marks" type="text" name="te_sic" value="<?=$rows['te_sic']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Business Intelligence</td>
                    <td><input class="obt_marks" type="text" name="te_bi" value="<?=$rows['te_bi']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>IT Service Managemant</td>
                    <td><input class="obt_marks" type="text" name="te_itsm" value="<?=$rows['te_itsm']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Enterprise Networking</td>
                    <td><input class="obt_marks" type="text" name="te_en" value="<?=$rows['te_en']?>"></td>
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