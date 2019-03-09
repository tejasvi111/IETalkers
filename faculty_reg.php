<php>
<head>
<link href="images/iconlogo.png" rel="icon">
<link href="CSSFiles\reg_css.css" rel="stylesheet">
<title>Welcome to IETALKERS...</title>
</head>
<body>
<div id="outer">
<div id="header">
<img id="logopart" src="images/logo.jpg"/ />
<div id="ttl">
<div class="name1">IE</div><div class="name1" style="color:#009688">t</div><div id="name2">alkers...</div>
<div id="name3">-Bridging the communication gap.....</div>
</div>
</div>
<div id="content">
<div id="menu1">
<a class="menuclass" href="contact_us.php" >Contact Us</a>
<a class="menuclass" href="photogallery.php">Photo Gallery</a>
<a class="menuclass" href="faculty_login.php">Faculty Login</a>
<a class="menuclass" href="stu_login.php">Student Login</a>
<a class="menuclass" href="index.php" style="Width:110px;">Home</a>
</div>
<br/><center><h2><img src="images/logo.jpg" height="40px" width="40px"/>Faculty Registration form</h2></center>
<form id="regform" action="fac_php.php" method="post">
<br/><hr color="#009688"/>
<table id="regtbl">
<tr>
<td>Please enter your name:</td>
<td><input type="text" class="txtbox" name="name" required></td>
</tr>
<tr>
<td>Select your Department:</td>
<td>
<select class="ddl"  name="dept" required>
<option>-Select-</option>
<option>Computer Science and Engineering</option>
<option>Information Technology</option>
<option>Chemical Engineering</option>
<option>Electronics and Communication Engineering</option>
<option>Electrical Engineering</option>
<option>Electronics and Instrumentation Engineering</option>
<option>Mechanical Engineering</option>
<option>Civil Engineering</option>
</select>
</td>
</tr>
<tr><td>Select your Faculty Type:</td><td><select class="ddl" name="fac_type">
<option>-Select-</option>
<option>Head of Department</option>
<option>Permanent faculty</option>
<option>Guest faculty</option>
</select></td></tr>
<tr>
<td>Enter your mobile no:</td>
<td><input type="number" class="txtbox" name="mob_no" required></td>
</tr>
<tr>
<td>Enter your Employee Id:</td><td><input type="text" class="txtbox" name="emp_id"required></td>
</tr>
<tr>
<td>Enter your Email ID:</td>
<td><input type="email" class="txtbox" name="email_id"required></td>
</tr>
<tr>
<td>Create a password for your account:</td>
<td><input type="password" class="txtbox" name="psw" required></td>
</tr>
<tr>
<td>Confirm your password:</td>
<td><input type="password" class="txtbox" required></td>
</tr>
<tr><td colspan="2" style="height:40px;"><hr color="#009688"/></td></tr>
<tr><td colspan="2"><input type="checkbox"> &nbsp;All the informations given by me are completely right from my knowledge.</td></tr>
<td colspan="2"><center><input type="reset" value="Clear All" class="btn"><input type="submit" Value="Submit" class="btn"></center></td>
</tr>
</table>
</form>
</div>
<div id="footer">
<div id="left"> &copy; <a href="https://www.ietlucknow.ac.in/">Institute of Enginnering and Technology Lucknow</a></div>
<div id="right">Developers Team:<a href="dteam.php">IEtalkers Team(CSE 2nd Year)</a></div>
</div
</div>
</body>
</php>