<<html lang="en_US">
<head>
	<title>AdminLogin</title>
</head>
<body>
	<h1>AdminLogin</h1>
	<form action="login.php" method="post">
	<table align="center>
		<tr>
			<td colspan="2">Username</td><td><input type="text" name="username" required></td>
		</tr>
		<tr>
			<td>Password</td><td><input type="password" name="password" required></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="login" value="login"></td>
		</tr>
		
</body>
</html>
<?php
include("dbcon.php");
if (isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$qry="SELECT * FROM `admin` WHERE `username`=`$username` AND `password`=`$password`"
	$run=mysqli_query($s1,$qry);
	if($run)
	{
		echo "success';
	}
}





?>