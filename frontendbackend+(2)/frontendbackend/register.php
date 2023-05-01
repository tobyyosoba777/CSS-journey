<?php 
require 'database/config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<title>
Front end Back end
</title>
</head>
<body background="register.jpg">
<div id="Mainwrapper">
<form method="post" enctype="multipart/form-data">
<table align="center" style="color:white;width:365px;height:200px;position:relative;top:200px;"border="1">
<tr>
<td style="position:relative;left:50px;bottom:5px;background-color:#1D2247;">
<center><h3>Register Form</h3></center></td>
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
<td><center><input type="submit" name="Register" value="Register" style="background-color:#EDE613;color:white;width:150px;height:40px;position:relative;top:5px;"/></center></td>
</tr>
<tr>
<td align="center">Upload Image</td>
<td><input type="file" name="img1"/></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['Register'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$img=$_FILES['img1']['name'];
	$temp_name=$_FILES['img1']['tmp_name'];
	$filepath="admin/$img";
	move_uploaded_file($temp_name,$filepath);
	$query2="insert into admin (username,password,img) values('$username','$password','$img')";
	$runquery2=mysqli_query($con,$query2);
	if($runquery2){
		echo'<script>alert("Account has been register")</script>';
	}
}


?>