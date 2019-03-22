<html>
<head>
<style>
#ok
{
	margin:50px 50px 50px 50px;
}
</style>
</head>
<body>
<form method="POST">
Remove <input type="text" name="remove">
<input type="submit" name="cartname" value="REMOVE">
<input type="submit" name="cartname" value="Cancel">
</form>
<?php

ini_set( "display_errors", 0);

$con=mysqli_connect("Localhost","root","");

$tot=0;
$number=0;

if(mysqli_connect_error())
{
	die("ERROR");
}
mysqli_select_db($con,"data1");
//$r=$_POST['remove'];
//$del="DELETE FROM amazondata WHERE ID='$r'";
//mysqli_query($con,$del);



if($_POST['cartname']=="REMOVE"){
$r=$_POST['remove'];
$del="DELETE FROM amazondata1 WHERE ID='$r'";
$sel="SELECT Amount FROM amazondata1 WHERE ID='$r'";
$tot=$tot-$sel;
mysqli_query($con,$del);
}



if($_POST['cartname']=="Cancel"){
mysqli_query($con,"DELETE FROM amazondata1");
mysqli_query($con,"ALTER TABLE amazondata1 AUTO_INCREMENT = 1");
}




$d="SELECT * FROM amazondata1";


$result=mysqli_query($con,$d);


while($rs=mysqli_fetch_array($result))
{
	$tot=$tot+$rs['Amount'];
	$number=$number+1;
}





$result1=mysqli_query($con,$d);



echo "<table border=1>
<tr>
<th> SNO </th>
<th> Items </th>
<th> Amount </th>
</tr>";
while($a=mysqli_fetch_array($result1))
{
	echo "<tr>";
	echo "<td>".$a['ID']."</td>";
	echo "<td>".$a['DATA']."</td>";
	echo "<td>".$a['Amount']."</td>";
	echo "</tr>";
}
echo "<tr>";
echo "<td> Total </td>";
echo "<td>".$number."</td>";
echo "<td>".$tot."</td>";
echo "</tr>";

echo "</table>";


?>
<a href="ok.php"><button id="ok"> OK </button></a>
<a href="mainpage.php"><button id="ok"> EXIT </button></a>
</body>
</html>