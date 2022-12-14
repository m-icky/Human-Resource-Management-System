<?php
include('../connection.php');
$proid=$_GET['saveid'];
$name=$_POST['name'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$salary=$_POST['salary'];

$sql="UPDATE `employee` SET `name`='$name',`phonenumber`='$phonenumber',`email`='$email',`salary`='$salary' WHERE `id`='$proid'";
if(mysqli_query($con,$sql))
{
    header("location:../hr/view_employee.php");
}
else{
    echo "error".$sql."<br>".mysqli_error($con);
}
?>