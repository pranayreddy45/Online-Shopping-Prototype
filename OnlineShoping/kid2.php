<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"data1");
$i="INSERT INTO amazondata1(DATA,Amount) VALUES('Kid2',200)";
if(mysqli_query($con,$i))
{
	echo "Your Item is added to cart";
	header("Location:kid.php");
}
else
{
	echo "ERROR";
}
?>