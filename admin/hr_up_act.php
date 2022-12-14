<?php
include('../connection.php');
$proid=$_GET['saveid'];
$name=$_POST['name'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$sql="UPDATE `hr` SET `name`='$name',`email`='$email',`phonenumber`='$phonenumber' WHERE `id`='$proid'";
if(mysqli_query($con,$sql))
{
    header("location:../admin/hr_view.php");
}
else{
    echo "error".$sql."<br>".mysqli_error($con);
}
?>