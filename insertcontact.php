<?php
$conn=mysqli_connect("localhost","root","","ebenezer_db")or die("enable to connect");
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];
	
$insert=mysqli_query($conn,"INSERT INTO `customers` (`email`, `phone`, `comment`) VALUES ('$email', '$phone', '$comment');");
if($insert==true)
{
echo"<script>alert('inserted well')</script>";
	echo"<script>history.back()</script>";
}
else{
	echo"<script>alert('not inserted well')</script>";
		echo"<script>history.back()</script>";
}

?>