<?php 
require 'database/config.php';
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<title>
Front end Back end
</title>
</head>
<body background="city.jpg">
<div id="Mainwrapper">
<form method="post" enctype="multipart/form-data">
<table align="center" style="color:white;width:365px;height:200px;position:relative;top:200px;"border="1">
<tr>
<td style="position:relative;left:50px;bottom:5px;background-color:#1D2247;">
<center><h3>Login Form</h3></center></td>
</tr>
<tr>
<td><center>Username</center></td>
<td><input type="text" name="username" placeholder="type your username"/></td>
</tr>
<tr>
<td><center>Password</center></td>
<td><input type="password" name="password" placeholder="type your password"/></td>
</tr>
<tr>

<td><center><input type="submit" name="SignIn" value="Login" style="background-color:#42729B;color:white;width:100px;height:40px;position:relative;top:5px;"/></center></td>

<td><center><a href="register.php"><input type="button" name="Register" value="Register" style="background-color:#EDE613;color:white;width:150px;height:40px;position:relative;top:5px;"/></a></center></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['SignIn'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query1="select * from admin where username='$username' AND password='$password'";
	$runquery1=mysqli_query($con,$query1);
	if(mysqli_num_rows($runquery1)>0){
		header('location:Mainpage.php');
		$_SESSION['username']=$username;
		
	}
	else{
		echo'<script>alert("Invalid username and password")</script>';
	}
}

?>