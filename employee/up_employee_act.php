<?php
include('../connection.php');
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$sql="UPDATE `employee` SET `name`='$name',`email`='$email',`phonenumber`='$phonenumber' WHERE `loginid`='$id'";
if(mysqli_query($con,$sql))
{
    header("location:../employee/employee_index.php");
}
else{
    echo "error".$sql."<br>".mysqli_error($con);
}
?>