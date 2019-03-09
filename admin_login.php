<php>
<head>
<style>
body
{
background: -webkit-linear-gradient(#009688, white);
}
#outer{
height:150px;
width:300px;
background:#fff;
border:3px solid #009688;
margin:170px auto;
padding:50px 50px 50px 50px;
font-size:19px;
font-family:calibri;
color:#009688;
font-weight:bold;
}
#txt1
{
height:40px;
width:297px;
margin-bottom:20px;
padding-left:3px;
}
#txt2
{
height:40px;
width:197px;
padding-left:3px;
}
#btn
{
height:39px;
width:100px;
background:#009688;
border:none;
font-size:14px;
color:#fff;
font-weight:bold;
}
</style>
<title></title>
</head>
<body>
<div id="outer">
Administrator Login...<br/><br/> 
<form action="get">
<input type="text" id="txt1" placeholder="Please enter your Admin ID..."  /><br/>
<input type="text" id="txt2" placeholder="Enter your password..."/><input type="button" value="Login" id="btn"/>
</form>
</div>
</body>
</php>