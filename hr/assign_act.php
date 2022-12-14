<?php
$id=$_POST['id'];
$work=$_POST['work'];


include '../connection.php';


  $sql = "insert into add_work(work,loginid) values('$work','$id')";
mysqli_query($con, $sql);
echo"<script>alert('Added Sucessfull');window.location='../hr/hr_index.php';</script>";


?>