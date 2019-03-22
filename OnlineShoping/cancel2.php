<?php
$c=$_POST['customerid'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"data1");
$sel="SELECT * FROM amazon1234 WHERE ID='$c'";
$sel1=mysqli_query($con,$sel);
$sel2=mysqli_fetch_array($sel1);
$sel3=$sel2['Items'];
$sel4=explode(",",$sel3);

$i=0;


echo "<table border=1>
<tr>
<th> SNO </th>
<th> Items </th>
</tr>";
while($i<5)
{
	$j=$i+1;
	echo "<tr>";
	echo "<td>".$j."</td>";
	echo "<td>".$sel4[$i]."</td>";
	echo "</tr>";
	$i=$i+1;
}


echo "</table>";

?>

<html>
<body>
<form method="POST" action="">
Items to be Removed <input type="text" name="remove">
<input type="submit" value="OK" name="cancel2">
<input type="submit" value="Cancel Order" name="cancel2"> 

</form>
<a href="mainpage.php"> <button> EXIT </button> </a>
</body>
</html>