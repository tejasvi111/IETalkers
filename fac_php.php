<?php
session_start();
$con=mysqli_connect('localhost','root','','iet') or die(mysqli_error());
$name=$_POST['name'];
$dept=$_POST['dept'];
$fac_type=$_POST['fac_type'];
$mob_no=$_POST['mob_no'];
$emp_id=$_POST['emp_id'];
$email_id=$_POST['email_id'];
$psw=base64_encode($_POST['psw']);

if(isset($name))
{
	$db="INSERT INTO faculty(name,dept,fac_type,mob_no,emp_id,email_id,psw)	
values('".$name."','".$dept."','".$fac_type."','".$mob_no."','".$emp_id."','".$email_id."','".$psw."')";
	$query=mysqli_query($con,$db);
	header('Location: http://localhost/IETALKERS/faculty_login.html');
}	
else
	echo "Failed";

?>