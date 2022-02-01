<!doctype html>
<head>
<title></title>
</head>
<body>
<style>
.first
{
width:100%;
height:20px;
background-color:#d5f0dc;
}
.first1
{
width:100%;
height:20px;
background-color:white;
top:20px;
}
	.second
{
width:100%;
height:80px;
background-color:#0e129e;
top:60px;

</style>
<div class="first"></div>
<div class="first1"></div>
<div class="second">
<img src="eblogo.jpg" style="width:10%;height:100%;top:10px;">
<h1 style="position:absolute;left:20%;color:white;top:35px;">EBENEZEL TECHNOLOGY LTD</h1> 
<h4 style=" position:absolute; left:755px;color:white;top:75px;">"Thus far the Lord helped us"</h4>
</div>

<?php

$conn=mysqli_connect("localhost","root","","ebenezer_db")or die("enable to connect");
$sel=mysqli_query($conn,"select * from customers") or die("not querry done well");
while($sel)
{
$fetch=mysqli_fetch_array($sel);

	$id=$fetch["customer_id"];
	$em=$fetch["email"];
	$ph=$fetch["phone"];
	$cm=$fetch["comment"];
	echo"$id"."$em"."$ph"."$cm";echo"<br>";
	
}
echo"<a href='admin.php'>Back</a>";
?>


</body>
</html>