<php>
<head>
<link href="images/iconlogo.png" rel="icon">
<link href="CSSFiles\reg_css.css" rel="stylesheet">
<title>Welcome to IETALKERS...</title>
</head>
<body>
<div id="outer">
<div id="header">
<img id="logopart" src="images/logo.jpg"/>
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
<br/><center><h2><img src="images/logo.jpg" height="40px" width="40px"/>Student Registration form</h2></center>
<form id="regform" action="stu_php.php" method="post">
<br/><hr color="#009688"/>
<table id="regtbl">
<tr>
<td>Please enter your name:</td>
<td><input type="text" class="txtbox" name="name" required></td>
</tr>
<tr>
<td>Select your course:</td>
<td>
<select class="ddl" name="course" required>
<option>-Select-</option>
<option>B. Tech</option>
<option>M. Tech</option>
<option>MCA</option>
<option>Ph. D</option>
</select>
</td>
</tr>
<tr>
<td>Select your branch(For B. Tech &amp; M. Tech):</td>
<td>
<select class="ddl" name="branch" required>
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
<tr>
<td>Academic year(Only for B. tech)</td>
<td>
<select class="ddl"name="year" required>
<option>-Select-</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
</select>
</td>
</tr>
<tr>
<td>Enter your mobile no:</td>
<td><input type="number" class="txtbox" name="mob_no" required></td>
</tr>
<tr>
<td>Enter your Roll no:</td><td><input type="number" class="txtbox"name="roll_no" required></td>
</tr>
<tr>
<td>Enter your Email ID:</td>
<td><input type="email" class="txtbox" name="email_id" required></td>
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
<td colspan="2"><center><input type="reset" value="Clear All" class="btn"><input type="submit" Value="submit" class="btn"></center></td>
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