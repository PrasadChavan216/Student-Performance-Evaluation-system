<?php
	include('fy_stud_add_data.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fy Add student marks</title>
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
      <li><a href="fy_student_list.php"><u><--back</u></a></li>
    </ul>
  </div>
  </header>

  <div class="regform">
    <h1>Add FY Student marks</h1>
</div>

<div class="main">

    <form action="fy_add_marks_all_php.php" method="POST">
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
	            		$sql = "SELECT * FROM fy_stud_data WHERE id = '$id' ";
	            	
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
        		<option value="sem1" >SEM I</option>
        		<option value="sem2">SEM II</option>
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
		            Semester I</h2> 
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
		                    <td>Imperative Programming</td>
		                    <td><input class="obt_marks" type="text" name="in_ip" value="<?=$rows['in_ip']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Digital Electronics</td>
		                    <td><input class="obt_marks" type="text" name="in_de" value="<?=$rows['in_de']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Discrete Mathematics</td>
		                    <td><input class="obt_marks" type="text" name="in_dm" value="<?=$rows['in_dm']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Communication Skills</td>
		                    <td><input class="obt_marks" type="text" name="in_cs" value="<?=$rows['in_cs']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Operating Systems</td>
		                    <td><input class="obt_marks" type="text" name="in_os" value="<?=$rows['in_os']?>"></td>
		                    <td>20</td>
		                </tr>
		            </table>
	        </div>

	        <div class="practical details">
	        	
		        	<h2 class="name">
		            Semester I</h2> 
		            
		            <table class="marks" >
		                <tr>
		                    <th>Subject</th>
		                    <th>Obtained Marks.</th>
		                    <th>Out of Marks(total)</th>
		                </tr>
		                <tr>
		                    <td>Imperative Programming</td>
		                    <td><input class="obt_marks" type="text" name="p_ip" value="<?=$rows['p_ip']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Digital Electronics</td>
		                    <td><input class="obt_marks" type="text" name="p_de" value="<?=$rows['p_de']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Discrete Mathematics</td>
		                    <td><input class="obt_marks" type="text" name="p_dm" value="<?=$rows['p_dm']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Communication Skills</td>
		                    <td><input class="obt_marks" type="text" name="p_cs" value="<?=$rows['p_cs']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Operating Systems</td>
		                    <td><input class="obt_marks" type="text" name="p_os" value="<?=$rows['p_os']?>"></td>
		                    <td>50</td>
		                </tr>
		            </table>
	        </div>

	        <div class="theory details">
	        	
		        	<h2 class="name">
		            Semester I</h2> 
		            
		            <table class="marks" >
		                <tr>
		                    <th>Subject</th>
		                    <th>Obtained Marks.</th>
		                    <th>Out of Marks(total)</th>
		                </tr>
		                <tr>
		                    <td>Imperative Programming</td>
		                    <td><input class="obt_marks" type="text" name="te_ip" value="<?=$rows['te_ip']?>"></td>
		                    <td>75</td>
		                </tr>
		                <tr>
		                    <td>Digital Electronics</td>
		                    <td><input class="obt_marks" type="text" name="te_de" value="<?=$rows['te_de']?>"></td>
		                    <td>75</td>
		                </tr>
		                <tr>
		                    <td>Discrete Mathematics</td>
		                    <td><input class="obt_marks" type="text" name="te_dm" value="<?=$rows['te_dm']?>"></td>
		                    <td>75</td>
		                </tr>
		                <tr>
		                    <td>Communication Skills</td>
		                    <td><input class="obt_marks" type="text" name="te_cs" value="<?=$rows['te_cs']?>"></td>
		                    <td>75</td>
		                </tr>
		                <tr>
		                    <td>Operating Systems</td>
		                    <td><input class="obt_marks" type="text" name="te_os" value="<?=$rows['te_os']?>"></td>
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
		            Semester II</h2> 
		            
		            <table class="marks" >
		                <tr>
		                    <th>Subject</th>
		                    <th>Obtained Marks.</th>
		                    <th>Out of Marks(total)</th>
		                </tr>
		                <tr>
		                    <td>Object Oriented Programming</td>
		                    <td><input class="obt_marks" type="text" name="in_oops" value="<?=$rows['in_oops']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Microprossser Architecture</td>
		                    <td><input class="obt_marks" type="text" name="in_mi" value="<?=$rows['in_mi']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Web Programming</td>
		                    <td><input class="obt_marks" type="text" name="in_wb" value="<?=$rows['in_wb']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Numerical and Statistical Methods</td>
		                    <td><input class="obt_marks" type="text" name="in_nm" value="<?=$rows['in_nm']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Green Computing</td>
		                    <td><input class="obt_marks" type="text" name="in_gc" value="<?=$rows['in_gc']?>"></td>
		                    <td>20</td>
		                </tr>
		            </table>
	        </div>

	        <div class="practical detailed">
	      
		           <h2 class="name">
		            Semester II</h2> 
		            
		            <table class="marks" >
		                <tr>
		                    <th>Subject</th>
		                    <th>Obtained Marks.</th>
		                    <th>Out of Marks(total)</th>
		                </tr>
		                <tr>
		                    <td>Object Oriented Programming</td>
		                    <td><input class="obt_marks" type="text" name="p_oops" value="<?=$rows['p_oops']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Microprossser Architecture</td>
		                    <td><input class="obt_marks" type="text" name="p_mi" value="<?=$rows['p_mi']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Web Programming</td>
		                    <td><input class="obt_marks" type="text" name="p_wb" value="<?=$rows['p_wb']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Numerical and Statistical Methods</td>
		                    <td><input class="obt_marks" type="text" name="p_nm" value="<?=$rows['p_nm']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Green Computing</td>
		                    <td><input class="obt_marks" type="text" name="p_gc" value="<?=$rows['p_gc']?>"></td>
		                    <td>50</td>
		                </tr>
		            </table> 
	        </div>

	        <div class="theory detailed">
	        	
		           <h2 class="name">
		            Semester II</h2> 
		            
		            <table class="marks" >
		                <tr>
		                    <th>Subject</th>
		                    <th>Obtained Marks.</th>
		                    <th>Out of Marks(total)</th>
		                </tr>
		                <tr>
		                    <td>Object Oriented Programming</td>
		                    <td><input class="obt_marks" type="text" name="te_oops" value="<?=$rows['te_oops']?>"></td>
		                    <td>75</td>
		                </tr>
		                <tr>
		                    <td>Microprossser Architecture</td>
		                    <td><input class="obt_marks" type="text" name="te_mi" value="<?=$rows['te_mi']?>"></td>
		                    <td>75</td>
		                </tr>
		                <tr>
		                    <td>Web Programming</td>
		                    <td><input class="obt_marks" type="text" name="te_wb" value="<?=$rows['te_wb']?>"></td>
		                    <td>75</td>
		                </tr>
		                <tr>
		                    <td>Numerical and Statistical Methods</td>
		                    <td><input class="obt_marks" type="text" name="te_nm" value="<?=$rows['te_nm']?>"></td>
		                    <td>75</td>
		                </tr>
		                <tr>
		                    <td>Green Computing</td>
		                    <td><input class="obt_marks" type="text" name="te_gc" value="<?=$rows['te_gc']?>"></td>
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