<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SY Performance Report</title>
    <link rel="stylesheet" type="text/css" href="../css/student_marksheet_all.css">
    <script type="text/javascript"> </script>
</head>
<body>
   <div class="title">
    <h1 align="center">Second Year Performance Report</h1>
   </div>
    <a href="sy_student_login.php">Logout</a>

    <?php

    session_start();
     include('fy_stud_add_data.php');
     $seat_no = 'seat_no';

     $sql = "SELECT * FROM sy_stud_data WHERE seat_no='".$_SESSION['seat_no']."'";
     $result1 = mysqli_query($db,$sql);

     while ($row = mysqli_fetch_array($result1))
      {
         echo ("<h3>Name : <b> ".$row['first_name']." ".$row['last_name']." </b></h3> ");
         echo "<h3>Seat Number : <b> ".$row['seat_no']." </b></h3> ";
     }


    ?>


    <h3>Course : <b>B.Sc.IT</b></h3>
   <h3>Select Semester : </h3>
      
      <div class="semlist">
         <select id="sem">
            <option disabled="" selected="">--Select--</option>
            <option value="sem1" >SEM III</option>
            <option value="sem2">SEM IV</option>
         </select>
        </div>

<!--SEMESTER III -->
<?php

$count = 0;
$count1 = 0;

$seat_no='seat_no';
 $sql2="SELECT * FROM `sy_stud_data` WHERE seat_no='".$_SESSION['seat_no']."'";
$run2=mysqli_query($db,$sql2);
 
 if(mysqli_num_rows($run2)>0)
{
$data2=mysqli_fetch_assoc($run2);
?>

<div class="sem1 detail">
      <div class="tit">
         <h2 align="center">SEMESTER III</h2>
      </div>
         <table border="2" align="center">
         	<tr>
         	    <th colspan="15">Subject</th>
         	</tr>
         	<tr>
         		<th colspan="3">PY</th>
         		<th colspan="3">DS</th>
         		<th colspan="3">CN</th>
         		<th colspan="3">DBMS</th>
         		<th colspan="3">AM</th>   
         	</tr>
         	<tr>
         		<!--PY-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--DS-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--CN-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--DBMS-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--AM-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         	</tr>
         	<tr>
         		<!--PY-->
         		<td><?php echo $data2['in_py'];?></td>
               <?php
                  if ($data2['in_py']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_py'];?></td>
               <?php
                  if ($data2['te_py']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_py'];?></td>
               <?php
                  if ($data2['p_py']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--DS-->
         		<td><?php echo $data2['in_ds'];?></td>
               <?php
                  if ($data2['in_ds']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_ds'];?></td>
               <?php
                  if ($data2['te_ds']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_ds'];?></td>
               <?php
                  if ($data2['p_ds']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--CN-->
         		<td><?php echo $data2['in_cn'];?></td>
               <?php
                  if ($data2['in_cn']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_cn'];?></td>
               <?php
                  if ($data2['te_cn']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_cn'];?></td>
               <?php
                  if ($data2['p_cn']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--DBMS-->
         		<td><?php echo $data2['in_dbms'];?></td>
               <?php
                  if ($data2['in_dbms']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_dbms'];?></td>
               <?php
                  if ($data2['te_dbms']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_dbms'];?></td>
               <?php
                  if ($data2['p_dbms']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--AM-->
         		<td><?php echo $data2['in_am'];?></td>
               <?php
                  if ($data2['in_am']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_am'];?></td>
               <?php
                  if ($data2['te_am']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_am'];?></td>
               <?php
                  if ($data2['p_am']>=20) 
                  {
                     $count++;
                  }
               ?>

         	</tr>
            <tr>
               <!--IP-->
               <td colspan="2"><?php echo $total1=$data2['in_py']+$data2['te_py']; ?></td>
               <td></td>
               <!--DE-->
               <td colspan="2"><?php echo $total2=$data2['in_ds']+$data2['te_ds']; ?></td>
               <td></td>
               <!--DM-->
               <td colspan="2"><?php echo $total3=$data2['in_cn']+$data2['te_cn']; ?></td>
               <td></td>
               <!--CS-->
               <td colspan="2"><?php echo $total4=$data2['in_dbms']+$data2['te_dbms']; ?></td>
               <td></td>
               <!--OS-->
               <td colspan="2"><?php echo $total5=$data2['in_am']+$data2['te_am']; ?></td>
               <td></td>    
            </tr>
            <tr>
               <th>Total Marks</th>
               <td colspan="14"><?php echo $all=$total1+$data2['p_py']+$total2+$data2['p_ds']+$total3+$data2['p_cn']+$total4+$data2['p_dbms']+$total5+$data2['p_am'] ; ?>/750</td>
            </tr>
            <tr>
               <th>Grade</th>
               <td colspan="14">
                  <?php
                  if ($all>700 && $count==15) 
                  {
                     echo "O";
                  }
                  elseif ($all>650 && $count==15) 
                  {
                     echo "A+";
                  }
                  elseif ($all>600 && $count==15) 
                  {
                     echo "A";
                  }
                  elseif ($all>550 && $count==15) 
                  {
                     echo "B+";
                  }
                  elseif ($all>500 && $count==15) 
                  {
                     echo "B";
                  }
                  elseif ($all>450 && $count==15) 
                  {
                     echo "C+";
                  }
                  elseif ($all>400 && $count==15) 
                  {
                     echo "C";
                  }
                  elseif ($all>350 && $count==15) 
                  {
                     echo "D";
                  }
                  else
                  {
                     echo "F";
                  }
               ?>
               </td>
            </tr>
            <tr>
               <td colspan="15">
                  <?php
                  if ($count==15) 
                  {
                     echo "Successfull..!!";;
                  }
                  else
                  {
                     echo "Unsuccessfull..!!";
                  }
               ?>
               </td>
            </tr>
            <tr>
            <div class="pbtn">
               <td colspan="15">
                  <form>
                     <input type="button" value="Print" onclick="window.print()" />
                  </form>
            </div>
               </td>

            </tr>
         </table>
</div>

<!-- SEMESTER IV -->

<div class="sem2 detail">
   <div class="tit">
      <h2 align="center">SEMESTER IV</h2>
   </div>     
         <table border="2" align="center">
            <tr>
                <th colspan="15">Subject</th>
            </tr>
            <tr>
               <th colspan="3">JAVA</th>
               <th colspan="3">EMB</th>
               <th colspan="3">SE</th>
               <th colspan="3">CG</th>
               <th colspan="3">COST</th>   
            </tr>
            <tr>
               <!--IP-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--DE-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--DM-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--CS-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--OS-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
            </tr>
            <tr>
               <!--java-->
               <td><?php echo $data2['in_java'];?></td>
               <?php
                  if ($data2['in_java']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_java'];?></td>
               <?php
                  if ($data2['te_java']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_java'];?></td>
               <?php
                  if ($data2['p_java']>=20) 
                  {
                     $count1++;
                  }
               ?>
               <!--em-->
               <td><?php echo $data2['in_em'];?></td>
               <?php
                  if ($data2['in_em']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_em'];?></td>
               <?php
                  if ($data2['te_em']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_em'];?></td>
               <?php
                  if ($data2['p_em']>=20) 
                  {
                     $count1++;
                  }
               ?>

               <!--se-->
               <td><?php echo $data2['in_se'];?></td>
               <?php
                  if ($data2['in_se']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_se'];?></td>
               <?php
                  if ($data2['te_se']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_se'];?></td>
               <?php
                  if ($data2['p_se']>=20) 
                  {
                     $count1++;
                  }
               ?>

               <!--cg-->
               <td><?php echo $data2['in_cg'];?></td>
               <?php
                  if ($data2['in_cg']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_cg'];?></td>
               <?php
                  if ($data2['te_cg']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_cg'];?></td>
               <?php
                  if ($data2['p_cg']>=20) 
                  {
                     $count1++;
                  }
               ?>
               <!--cost-->
               <td><?php echo $data2['in_cost'];?></td>
               <?php
                  if ($data2['in_cost']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_cost'];?></td>
               <?php
                  if ($data2['te_cost']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_cost'];?></td>
               <?php
                  if ($data2['p_cost']>=20) 
                  {
                     $count1++;
                  }
               ?>

            </tr>
            <tr>
               <!--IP-->
               <td colspan="2"><?php echo $total6=$data2['in_java']+$data2['te_java']; ?></td>
               <td></td>
               <!--DE-->
               <td colspan="2"><?php echo $total7=$data2['in_em']+$data2['te_em']; ?></td>
               <td></td>
               <!--DM-->
               <td colspan="2"><?php echo $total8=$data2['in_se']+$data2['te_se']; ?></td>
               <td></td>
               <!--CS-->
               <td colspan="2"><?php echo $total9=$data2['in_cg']+$data2['te_cg']; ?></td>
               <td></td>
               <!--OS-->
               <td colspan="2"><?php echo $total10=$data2['in_cost']+$data2['te_cost']; ?></td>
               <td></td>    
            </tr>
            <tr>
               <th>Total Marks</th>
               <td colspan="14"><?php echo $all=$total6+$data2['p_java']+$total7+$data2['p_em']+$total8+$data2['p_se']+$total9+$data2['p_cg']+$total10+$data2['p_cost'] ; ?>/750</td>
            </tr>
            <tr>
               <th>Grade</th>
               <td colspan="14">
                   <?php
                  if ($all>700 && $count1==15) 
                  {
                     echo "O";
                  }
                  elseif ($all>650 && $count1==15) 
                  {
                     echo "A+";
                  }
                  elseif ($all>600 && $count1==15) 
                  {
                     echo "A";
                  }
                  elseif ($all>550 && $count1==15) 
                  {
                     echo "B+";
                  }
                  elseif ($all>500 && $count1==15) 
                  {
                     echo "B";
                  }
                  elseif ($all>450 && $count1==15) 
                  {
                     echo "C+";
                  }
                  elseif ($all>400 && $count1==15) 
                  {
                     echo "C";
                  }
                  elseif ($all>350 && $count1==15) 
                  {
                     echo "D";
                  }
                  else
                  {
                     echo "F";
                  }
               ?>  
               </td>
            </tr>
            <tr>
               <td colspan="15">
                  <?php
                  if ($count1==15) 
                  {
                     echo "Successfull..!!";;
                  }
                  else
                  {
                     echo "Unsuccessfull..!!";
                  }
               ?>
               </td>
            </tr>
            <tr>
               <td colspan="15">
                  <form>
                     <input type="button" value="Print" onclick="window.print()" />
                  </form>
               </td>

            </tr>
         </table>
</div>

<?php
         }
         ?>

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
</script>
</body>
</html>
