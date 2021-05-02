<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TY Performance Report</title>
    <link rel="stylesheet" type="text/css" href="../css/student_marksheet_all.css">
    <script type="text/javascript"></script>
</head>
<body>
   <div class="title">
    <h1 align="center">Third Year Performance Report</h1>
   </div>

     <a href="ty_student_login.php">Logout</a>

   <?php

    session_start();
     include('fy_stud_add_data.php');
     $seat_no = 'seat_no';

     $sql = "SELECT * FROM ty_stud_data WHERE seat_no='".$_SESSION['seat_no']."'";
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
            <option value="sem1" >SEM V</option>
            <option value="sem2">SEM VI</option>
         </select>
        </div>

<!--SEMESTER V -->
<?php

$count = 0;
$count1 = 0;

$seat_no='seat_no';
 $sql2="SELECT * FROM `ty_stud_data` WHERE seat_no='".$_SESSION['seat_no']."'";
$run2=mysqli_query($db,$sql2);
 
 if(mysqli_num_rows($run2)>0)
{
$data2=mysqli_fetch_assoc($run2);
?>

<div class="sem1 detail">
      <div class="tit">
         <h2 align="center">SEMESTER V</h2>
      </div>
         <table border="2" align="center">
         	<tr>
         	    <th colspan="15">Subject</th>
         	</tr>
         	<tr>
         		<th colspan="3">SPM</th>
         		<th colspan="3">IOT</th>
         		<th colspan="3">AWP</th>
         		<th colspan="3">AI</th>
         		<th colspan="3">NGT</th>   
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
         		<td><?php echo $data2['in_iot'];?></td>
               <?php
                  if ($data2['in_iot']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_iot'];?></td>
               <?php
                  if ($data2['te_iot']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_iot'];?></td>
               <?php
                  if ($data2['p_iot']>=20) 
                  {
                     $count++;
                  }
               ?>
         		<!--awp-->
         		<td><?php echo $data2['in_awp'];?></td>
               <?php
                  if ($data2['in_awp']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_awp'];?></td>
               <?php
                  if ($data2['te_awp']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_awp'];?></td>
               <?php
                  if ($data2['p_awp']>=20) 
                  {
                     $count++;
                  }
               ?>
         		<!--ai-->
         		<td><?php echo $data2['in_ai'];?></td>
               <?php
                  if ($data2['in_ai']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_ai'];?></td>
               <?php
                  if ($data2['te_ai']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_ai'];?></td>
               <?php
                  if ($data2['p_ai']>=20) 
                  {
                     $count++;
                  }
               ?>
         		<!--ngt-->
         		<td><?php echo $data2['in_ngt'];?></td>
               <?php
                  if ($data2['in_ngt']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_ngt'];?></td>
               <?php
                  if ($data2['te_ngt']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_ngt'];?></td>
               <?php
                  if ($data2['p_ngt']>=20) 
                  {
                     $count++;
                  }
               ?>
         		<!--spm-->
         		<td><?php echo $data2['in_spm'];?></td>
               <?php
                  if ($data2['in_spm']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_spm'];?></td>
               <?php
                  if ($data2['te_spm']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_spm'];?></td>
               <?php
                  if ($data2['p_spm']>=20) 
                  {
                     $count++;
                  }
               ?>
         	</tr>
            <tr>
               <!--IP-->
               <td colspan="2"><?php echo $total1=$data2['in_iot']+$data2['te_iot']; ?></td>
               <td></td>
               <!--DE-->
               <td colspan="2"><?php echo $total2=$data2['in_awp']+$data2['te_awp']; ?></td>
               <td></td>
               <!--DM-->
               <td colspan="2"><?php echo $total3=$data2['in_ai']+$data2['te_ai']; ?></td>
               <td></td>
               <!--CS-->
               <td colspan="2"><?php echo $total4=$data2['in_ngt']+$data2['te_ngt']; ?></td>
               <td></td>
               <!--OS-->
               <td colspan="2"><?php echo $total5=$data2['in_spm']+$data2['te_spm']; ?></td>
               <td></td>    
            </tr>
            <tr>
               <th>Total Marks</th>
               <td colspan="14"><?php echo $all=$total1+$data2['p_iot']+$total2+$data2['p_awp']+$total3+$data2['p_ai']+$total4+$data2['p_ngt']+$total5+$data2['p_spm'] ; ?>/750</td>
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

<!-- SEMESTER VI -->

<div class="sem2 detail">
   <div class="tit">
      <h2 align="center">SEMESTER VI</h2>
   </div>     
         <table border="2" align="center">
            <tr>
                <th colspan="15">Subject</th>
            </tr>
            <tr>
               <th colspan="3">SQA</th>
               <th colspan="3">SIC</th>
               <th colspan="3">BI</th>
               <th colspan="3">ITSM</th>
               <th colspan="3">EN</th>   
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
               <!--sqa-->
               <td><?php echo $data2['in_sqa'];?></td>
               <?php
                  if ($data2['in_sqa']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_sqa'];?></td>
               <?php
                  if ($data2['te_sqa']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_sqa'];?></td>
               <?php
                  if ($data2['p_sqa']>=20) 
                  {
                     $count1++;
                  }
               ?>

               <!--sic-->
               <td><?php echo $data2['in_sic'];?></td>
               <?php
                  if ($data2['in_sic']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_sic'];?></td>
               <?php
                  if ($data2['te_sic']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_sic'];?></td>
               <?php
                  if ($data2['p_sic']>=20) 
                  {
                     $count1++;
                  }
               ?>
               <!--bi-->
               <td><?php echo $data2['in_bi'];?></td>
               <?php
                  if ($data2['in_bi']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_bi'];?></td>
               <?php
                  if ($data2['te_bi']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_bi'];?></td>
               <?php
                  if ($data2['p_bi']>=20) 
                  {
                     $count1++;
                  }
               ?>
               <!--itsm-->
               <td><?php echo $data2['in_itsm'];?></td>
               <?php
                  if ($data2['in_itsm']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_itsm'];?></td>
               <?php
                  if ($data2['te_itsm']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_itsm'];?></td>
               <?php
                  if ($data2['p_itsm']>=20) 
                  {
                     $count1++;
                  }
               ?>
               <!--en-->
               <td><?php echo $data2['in_en'];?></td>
               <?php
                  if ($data2['in_en']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_en'];?></td>
               <?php
                  if ($data2['te_en']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_en'];?></td>
               <?php
                  if ($data2['p_en']>=20) 
                  {
                     $count1++;
                  }
               ?>
            </tr>
            <tr>
               <!--IP-->
               <td colspan="2"><?php echo $total6=$data2['in_sqa']+$data2['te_sqa']; ?></td>
               <td></td>
               <!--DE-->
               <td colspan="2"><?php echo $total7=$data2['in_sic']+$data2['te_sic']; ?></td>
               <td></td>
               <!--DM-->
               <td colspan="2"><?php echo $total8=$data2['in_bi']+$data2['te_bi']; ?></td>
               <td></td>
               <!--CS-->
               <td colspan="2"><?php echo $total9=$data2['in_itsm']+$data2['te_itsm']; ?></td>
               <td></td>
               <!--OS-->
               <td colspan="2"><?php echo $total10=$data2['in_en']+$data2['te_en']; ?></td>
               <td></td>    
            </tr>
            <tr>
               <th>Total Marks</th>
               <td colspan="14"><?php echo $all=$total6+$data2['p_sqa']+$total7+$data2['p_sic']+$total8+$data2['p_bi']+$total9+$data2['p_itsm']+$total10+$data2['p_en'] ; ?>/750</td>
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
