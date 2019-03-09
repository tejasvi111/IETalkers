<?php
 session_start();
{
$emp_id=$_POST['emp_id'];
$psw=$_POST['psw']; 
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'iet');
  if(!$con)
  echo "<script> alert('Connection Failed') </script>";
 
 $res="select* from faculty";
 $query=mysqli_query($con,$res);

 if(!$query)
 {
	 echo "<script> alert('DATA BASE NOT FOUND') </script>";
 }
   $num=mysqli_num_rows($query);
 for($i=0;$i<$num;$i++)
 {
	 $val=mysqli_fetch_array($query);
	 {
		 if($val['emp_id']==$emp_id && base64_decode($val['psw'])==$psw)
		 {
			 header('Location: http://localhost/IETALKERS/stu_profile.html');
		 }
		 else
			 echo "invalid username or password";
	 } 
 }
}
?> 