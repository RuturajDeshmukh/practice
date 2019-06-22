<?php
include("dbcon.php");
if (isset($_POST['submit']))
{
	
$title=$_POST['title'];

$userid=$_POST['userid'];
$con=mysqli_connect('localhost','root','','blogposts');

$qry="INSERT INTO `blogs`( `user_id`, `title`) VALUES ('$userid','$title')";
$s1=mysqli_query($con,$qry);
if ($s1)
{
	echo "successfullycreated a blog";
	echo '<a href="logout.php">click here to Logout</a>';
}	
else
	echo "failed to create";
}
?>