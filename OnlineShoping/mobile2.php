<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"data1");
$i="INSERT INTO amazondata1(DATA,Amount) VALUES('MI',15000)";
if(mysqli_query($con,$i))
{
	echo "Your Item is added to cart";
	header("Location:mobile.php");
}
else
{
	echo "ERROR";
}
?>