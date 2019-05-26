
<html>
<head>
</head>
<body>
	<h1>example of image uploading</h1>
	<form action="index.php" method="post" enctype="multipart/form-data">
		<input type="file" name="img1" required="required"/>
		<input type="submit" name="submit" value="upload"/>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	print_r($_FILES['img1']);
	$imagename=$_FILES['img1']['name'];
	$_tempname=$_FILES['img1']['tmp_name'];
	$conn=mysqli_connect('localhost','root','','storeimg');
	move_uploaded_file($_tempname,"images/$imagename");
	$sq1="INSERT INTO `uploadimg`( `images`) VALUES ('$imagename')";
	$run=mysqli_query($conn,$sq1);
	echo "uploadsuccess";
}
?>