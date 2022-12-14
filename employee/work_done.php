<?php
include '../connection.php';
$id = $_GET['id'];
$del = "DELETE FROM add_work WHERE id= '$id' " ;
mysqli_query($con,$del);


echo "<script> alert('Work Done');window.location.href='../employee/employee_index.php';</script>";

?>