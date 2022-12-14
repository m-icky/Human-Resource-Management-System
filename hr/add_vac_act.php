<?php
$post_name=$_POST['post_name'];
$experience=$_POST['experience'];
$salary=$_POST['salary'];
$place=$_POST['place'];


include '../connection.php';

  $sql = "insert into add_vacancy(post_name,salary,experience,place) values('$post_name','$salary','$experience','$place')";
mysqli_query($con, $sql);
echo"<script>alert('Added Sucessfull');window.location='../hr/hr_index.php';</script>";


?>