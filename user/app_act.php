<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['phone'];
$address=$_POST['address'];
$Date_of_birth=$_POST['Date_of_birth'];
$experience=$_POST['experience'];
$post_of_application=$_POST['post_of_application'];
$expected_ctc=$_POST['expected_ctc'];
$cover_letter=$_POST['cover_letter'];
$username=$_POST['username'];
$password=$_POST['password'];


include '../connection.php';
$query = "insert into login(username,password,usertype,status) values('$username','$password','user','1')";
mysqli_query($con, $query) or die(mysqli_error($con));
$logid=mysqli_insert_id($con);

  $sql = "insert into application_form(name,address,phonenumber,email,Date_of_birth,post_of_application,experience,expected_ctc,cover_letter,loginid) values('$name','$address','$number','$email','$Date_of_birth','$post_of_application','$experience','$expected_ctc','$cover_letter','$logid')";
mysqli_query($con, $sql);
echo"<script>alert('Submitted Sucessfull');window.location='../user/user_index.php';</script>";


?>