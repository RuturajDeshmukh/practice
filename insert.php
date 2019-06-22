<?php
include("dbcon.php");
if (isset($_POST['submit']))
{
	
$title=$_POST['title'];


$con=mysqli_connect('localhost','root','','blogposts');

$qry="INSERT INTO `blogs`(  `title`) VALUES ('$title')";
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