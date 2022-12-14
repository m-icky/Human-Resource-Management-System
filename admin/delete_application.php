<?php
include('../connection.php');
$proid=$_GET['id'];
$sql="DELETE FROM `application_form` WHERE id='$proid'";
(mysqli_query($con,$sql));

echo "<script>alert('Deleted');window.location='../admin/appli_view.php'</script>";
?>