<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"data1");
$i="INSERT INTO amazondata1(DATA,Amount) VALUES('Shirt1',400)";
if(mysqli_query($con,$i))
{
	echo "Your Item is added to cart";
	header("location:men.php");
}
else
{
	echo "ERROR";
}
?>