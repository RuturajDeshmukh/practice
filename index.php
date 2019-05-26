<html lang="en_US">
<head>
	<title>StudentManagement</title>
</head>
<body>

<h4 align="right"><a href="login.php">Admin login</a></h4>
<h1 align="center">Welcome to Management System</h1>
<form action="index.php" method="post">
	<table>
		<tr>
			<td colspan="2">Student Information</td>
		</tr>
		<tr>
			<td>Choose Standard</td>
			<td>
				<select name="std">
					
				<option value="1">1st</option>
				<option value="2">2st</option>
				<option value="3">3st</option>
				<option value="4">4st</option>
				<option value="5">5st</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>enter rollno</td>
			<td><input type="text" name="rollno" required></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="show"></td.
		</tr>
</body>
</html>