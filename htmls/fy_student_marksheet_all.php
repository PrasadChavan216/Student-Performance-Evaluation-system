
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FY Performance Report</title>
    <link rel="stylesheet" type="text/css" href="../css/student_marksheet_all.css">
    <script type="text/javascript"></script>
</head>
<body>
   <div class="title">
    <h1 align="center">First Year Performance Report</h1>
   </div>
    <a href="fy_student_login.php">Logout</a>

    <?php

    session_start();
     include('fy_stud_add_data.php');
     $seat_no = 'seat_no';

     $sql = "SELECT * FROM fy_stud_data WHERE seat_no='".$_SESSION['seat_no']."'";
     $result1 = mysqli_query($db,$sql);

     while ($row = mysqli_fetch_array($result1))
      {
         echo "<h3>Name : <b> ".$row['first_name']." ".$row['last_name']." </b></h3> ";
         echo "<h3>Seat Number : <b> ".$row['seat_no']." </b></h3> ";
     }


    ?>


    <h3>Course : <b>B.Sc.IT</b></h3>
   <h3>Select Semester : </h3>

      
      <div class="semlist">
         <select id="sem">
            <option disabled="" selected="">--Select--</option>
            <option value="sem1" >SEM I</option>
            <option value="sem2">SEM II</option>
         </select>
        </div>

<!--SEMESTER I -->
<?php

$count = 0;
$count1 = 0;

$seat_no='seat_no';
 $sql2="SELECT * FROM `fy_stud_data` WHERE seat_no='".$_SESSION['seat_no']."'";
$run2=mysqli_query($db,$sql2);
 
 if(mysqli_num_rows($run2)>0)
{
$data2=mysqli_fetch_assoc($run2);
?>




<div class="sem1 detail">
      <div class="tit">
         <h2 align="center">SEMESTER I</h2>
      </div>
         <table border="2" align="center">
         	<tr>
         	    <th colspan="15">Subject</th>     
         	</tr>
         	<tr>
         		<th colspan="3">IP</th>
         		<th colspan="3">DE</th>
         		<th colspan="3">DM</th>
         		<th colspan="3">CS</th>
         		<th colspan="3">OS</th>   
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
         		<!--IP-->
         		<td><?php echo $data2['in_ip'];?></td>
               <?php
                  if ($data2['in_ip']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_ip'];?></td>
               <?php
                  if ($data2['te_ip']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_ip'];?></td>
               <?php
                  if ($data2['p_ip']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--DE-->
         		<td><?php echo $data2['in_de'];?></td>
               <?php
                  if ($data2['in_de']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_de'];?></td>
               <?php
                  if ($data2['te_de']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_de'];?></td>
               <?php
                  if ($data2['p_de']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--DM-->
         		<td><?php echo $data2['in_dm'];?></td>
               <?php
                  if ($data2['in_dm']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_dm'];?></td>
               <?php
                  if ($data2['te_dm']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_dm'];?></td>
               <?php
                  if ($data2['p_dm']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--CS-->
         		<td><?php echo $data2['in_cs'];?></td>
               <?php
                  if ($data2['in_cs']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_cs'];?></td>
               <?php
                  if ($data2['te_cs']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_cs'];?></td>
               <?php
                  if ($data2['p_cs']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--OS-->
         		<td><?php echo $data2['in_os'];?></td>
               <?php
                  if ($data2['in_os']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_os'];?></td>
               <?php
                  if ($data2['te_os']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_os'];?></td>
               <?php
                  if ($data2['p_os']>=20) 
                  {
                     $count++;
                  }
               ?>

         	</tr>
            <tr>
               <!--IP-->
               <td colspan="2"><?php echo $total1=$data2['in_ip']+$data2['te_ip']; ?></td>
               <td> </td>
               <!--DE-->
               <td colspan="2"><?php echo $total2=$data2['in_de']+$data2['te_de']; ?></td>
               <td></td>
               <!--DM-->
               <td colspan="2"><?php echo $total3=$data2['in_dm']+$data2['te_dm']; ?></td>
               <td></td>
               <!--CS-->
               <td colspan="2"><?php echo $total4=$data2['in_cs']+$data2['te_cs']; ?></td>
               <td></td>
               <!--OS-->
               <td colspan="2"><?php echo $total5=$data2['in_os']+$data2['te_os']; ?></td>
               <td></td>    
            </tr>

            <tr>
               <th>Total Marks</th>
               <td colspan="14"><?php echo $all=$total1+$data2['p_ip']+$total2+$data2['p_de']+$total3+$data2['p_dm']+$total4+$data2['p_cs']+$total5+$data2['p_os'] ; ?>/750</td>
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
               <td colspan="15">
                  <form>
                     <input type="button" value="Print" onclick="window.print()" />
                  </form>
               </td>

            </tr>
         </table>
       
</div>

<!-- SEMESTER II -->

<div class="sem2 detail">
   <div class="tit">                                                                                                    
      <h2 align="center">SEMESTER II</h2>
   </div>     
         <table border="2" align="center">
            <tr>
                <th colspan="15">Subject</th>
            </tr>
            <tr>
               <th colspan="3">OOPS</th>
               <th colspan="3">MP</th>
               <th colspan="3">WP</th>
               <th colspan="3">NM</th>
               <th colspan="3">GC</th>   
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
               <!--OOPS-->
               <td><?php echo $data2['in_oops'];?></td>
               <?php
                  if ($data2['in_oops']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_oops'];?></td>
               <?php
                  if ($data2['te_oops']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_oops'];?></td>
               <?php
                  if ($data2['p_oops']>=20) 
                  {
                     $count1++;
                  }
               ?>

               <!--MI-->
               <td><?php echo $data2['in_mi'];?></td>
               <?php
                  if ($data2['in_mi']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_mi'];?></td>
               <?php
                  if ($data2['te_mi']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_mi'];?></td>
               <?php
                  if ($data2['p_mi']>=20) 
                  {
                     $count1++;
                  }
               ?>

               <!--WB-->
               <td><?php echo $data2['in_wb'];?></td>
               <?php
                  if ($data2['in_wb']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_wb'];?></td>
               <?php
                  if ($data2['te_wb']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_wb'];?></td>
               <?php
                  if ($data2['p_wb']>=20) 
                  {
                     $count1++;
                  }
               ?>

               <!--NM-->
               <td><?php echo $data2['in_nm'];?></td>
               <?php
                  if ($data2['in_nm']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_nm'];?></td>
               <?php
                  if ($data2['te_nm']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_nm'];?></td>
               <?php
                  if ($data2['p_nm']>=30) 
                  {
                     $count1++;
                  }
               ?>

               <!--GC-->
               <td><?php echo $data2['in_gc'];?></td>
               <?php
                  if ($data2['in_gc']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_gc'];?></td>
               <?php
                  if ($data2['te_gc']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_gc'];?></td>
               <?php
                  if ($data2['p_gc']>=20) 
                  {
                     $count1++;
                  }
               ?>

            </tr>
            <tr>
               <!--IP-->
               <td colspan="2"><?php echo $total6=$data2['in_oops']+$data2['te_oops']; ?></td>
               <td></td>
               <!--DE-->
               <td colspan="2"><?php echo $total7=$data2['in_mi']+$data2['te_mi']; ?></td>
               <td></td>
               <!--DM-->
               <td colspan="2"><?php echo $total8=$data2['in_wb']+$data2['te_wb']; ?></td>
               <td></td>
               <!--CS-->
               <td colspan="2"><?php echo $total9=$data2['in_nm']+$data2['te_nm']; ?></td>
               <td></td>
               <!--OS-->
               <td colspan="2"><?php echo $total10=$data2['in_gc']+$data2['te_gc']; ?></td>
               <td></td>    
            </tr>
            <tr>
               <th>Total Marks</th>
               <td colspan="14"><?php echo $all=$total6+$data2['p_oops']+$total7+$data2['p_mi']+$total8+$data2['p_wb']+$total9+$data2['p_nm']+$total10+$data2['p_gc'] ; ?>/750</td>
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
