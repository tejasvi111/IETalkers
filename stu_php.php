<?php
session_start();
$con=mysqli_connect('localhost','root','','iet') or die(mysqli_error());
$name=$_POST['name'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$mob_no=$_POST['mob_no'];
$roll_no=$_POST['roll_no'];
$email_id=$_POST['email_id'];
$psw=base64_encode($_POST['psw']);

if(isset($name))
{
	$db="INSERT INTO student(name,course,branch,year,mob_no,roll_no,email_id,psw)	
values('".$name."','".$course."','".$branch."','".$year."','".$mob_no."','".$roll_no."','".$email_id."','".$psw."')";
	$query=mysqli_query($con,$db);
	header('Location: http://localhost/IETALKERS/stu_login.html');
}	
else
	echo "Failed";

?>