<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];


include '../connection.php';
$query = "insert into login(username,password,usertype,status) values('$username','$password','employee','1')";
mysqli_query($con, $query) or die(mysqli_error($con));
$logid=mysqli_insert_id($con);

  $sql = "insert into employee(name,phonenumber,email,loginid) values('$name','$number','$email','$logid')";
mysqli_query($con, $sql);
echo"<script>alert('Added Sucessfull');window.location='admin_index.php';</script>";


?>