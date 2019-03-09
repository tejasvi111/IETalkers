<!DOCTYPE php>
<php>
<head>
<link rel="stylesheet" href="CSSFiles\forgotpsw_css.css">
</head>
<body>
<div id="outer">
<div id="psw">
<div id="txt1">Forgot your password?</div>
<hr color="#009688" width="450px;" style="margin-left:20px;">
<br>
<p>Don't worry just fill in  your registered email id and we will help  you to retrieve your password.</p>
<br>
<form id="forgotpsw" method="post" action="forgotpsw.php">
<label for='email' style="font-size:20px;padding-left:20px;">Email address:</label><br>
<br>
<div style="padding-left:20px;">
<input name='email' id='emailid' type='email' maxlength="50" placeholder="enter your registered email id...."style="background-image:url('images/email_icon.png');"required>
</div>
<br>
<br>
<div id="forgot">
<input type="Submit" name="Email" value="Send Email">
</form>
</div>
</div>
</div>
<div id="footer">
<div id="left"> &copy; <a href="https://www.ietlucknow.ac.in/">Institute of Enginnering and Technology Lucknow</a></div>
<div id="right">Developers Team:<a href="dteam.php">IEtalkers Team(CSE 2nd Year)</a></div>
</div>
</body>
</php>
