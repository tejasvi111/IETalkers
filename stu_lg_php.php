<?php

 session_start();
{
$roll_no=$_POST['roll_no'];
$psw=$_POST['psw']; 
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'iet');
  if(!$con)
  echo "<script> alert('Connection Failed') </script>";
 
 $res="select* from student";
 $query=mysqli_query($con,$res);

 if(!$query)
 {
	 echo "<script> alert('DATA BASE NOT FOUND') </script>";
 }
   $num=mysqli_num_rows($query);
   $temp=0;
 for($i=0;$i<$num;$i++)
 {
	 $val=mysqli_fetch_array($query);
	 {
		 if($val['roll_no']==$roll_no && base64_decode($val['psw'])==$psw)
		 {
			 header('Location: http://localhost/IETALKERS/stu_profile.html');
			 $temp=1;
		 }
		 else
			 echo "invalid username or password";
	 } 
 }
 if($temp==0)
 {
	 header('Location: http://localhost/IETALKERS/stu_lg_php.php');
 }
}
 
 

?> 