<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset(['Username'])){
	$uname=$_POST["Username"];
	$password=$_POST["Password"];
	
	$sql="select*from loginform where User='".$uname."'AND Password'".$password."'"
	limit 0";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)==0){
		echo"you have Successfully Login";
		exit();
}
	else{
		echo"wrong password";
		exit();
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">	
	<title></title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="main">
		<div class="secondmain">
			<form>
			<div class="header">
			<h2>LOGIN</h2>
			<div/>
			<input type= "text" placeholder="Username" required/>
			<input type= "password" placeholder="Password" required/>
			<p>
			<input type= "checkbox"/><span> Keep me login</span>
			<span class="forget"><a href="forget.html">Forget Password?</a></span>
			
			</p>
			<input type="Submit" value="LogIn"/>
			<p style="text-align:center;">
				<span>Not a member? </span><a class="link" href="register.html">Sign Up</a>
				</p>
			</form>
			
		</div>
	</div>

</body>
</html>