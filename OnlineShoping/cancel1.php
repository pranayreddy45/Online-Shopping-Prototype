<?php
$c=$_POST['customerid'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"data1");
$sel="SELECT * FROM amazon1234 WHERE ID='$c'";
$sel1=mysqli_query($con,$sel);
$sel2=mysqli_fetch_array($sel1);
$email=$sel2['Email'];
//echo $email;
$res=mysqli_query($con,"DELETE FROM amazon1234 WHERE ID='$c'");
echo "<h3> Your order is cancelled sucessfully </h3>";
$emailTo=$email;
$sub="Online Shopping";
$body="Your order ID=$c is sucessfully cancelled";		
$headers="From:example@gmail.com";
if(mail($emailTo,$sub,$body,$headers))
{
echo "Sent";
} 
else
{
echo "Not";
}

?>

<html>
<body>
<a href="mainpage.php"> <button> OK </button> </a>
</body>
</html>
