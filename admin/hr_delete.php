<?php
include('../connection.php');
$proid=$_GET['id'];
$sql="DELETE FROM `hr` WHERE id='$proid'";
(mysqli_query($con,$sql));
$proid=$_GET['id'];
$sql="DELETE FROM `login` WHERE id='$proid'";
(mysqli_query($con,$sql));
echo "<script>alert('Deleted');window.location='hr_view.php'</script>";
?>