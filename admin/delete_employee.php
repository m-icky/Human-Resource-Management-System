<?php
include('../connection.php');
$proid=$_GET['id'];
$sql="DELETE FROM `employee` WHERE id='$proid'";
(mysqli_query($con,$sql));
$proid=$_GET['id'];
$sql="DELETE FROM `login` WHERE id='$proid'";
(mysqli_query($con,$sql));
echo "<script>alert('Deleted');window.location='employee_view.php'</script>";
?>