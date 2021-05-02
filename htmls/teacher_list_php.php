<?php
$db = mysqli_connect('localhost','root','','teacher');

$sql = "SELECT * FROM teacher_data ORDER BY first_name ";

$result = mysqli_query($db,$sql);
