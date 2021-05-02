<?php
$db = mysqli_connect('localhost','root','','fy_stud');

$sql = "SELECT * FROM sy_stud_data ORDER BY first_name ";

$result = mysqli_query($db,$sql);


