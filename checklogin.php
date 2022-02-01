<?php
$conn=mysqli_connect("localhost","root","","ebenezer_db");
$usern=$_POST['username'];
$pass=$_POST['pass'];
$login=mysqli_query($conn,"select* from login_tbl where username='$usern' and password='$pass'");
  $fetch=mysqli_fetch_array($login);
$id=$fetch['login_id'];
$user=$fetch['username'];
$passw=$fetch['password'];
if($usern==$fetch['username'] and $pass==$fetch['password'] )
{
	echo"<script>alert('Welcome to Administration Page')</script>";
	include("admin.php");
}
else{
	echo"<script>alert('invalid to login')</script>";
	echo"<script>history.back()</script>";
}
?>