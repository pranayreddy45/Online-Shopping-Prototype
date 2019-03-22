<?php
$total=0;
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['id'];
$address=$_POST['add'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['con'];
$pin=$_POST['pin'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"data1");
$r="SELECT * FROM amazondata1";
$res=mysqli_query($con,$r);
$d=array();
$i=0;
while($a=mysqli_fetch_array($res))
{
$d[$i]=$a['DATA'];
//print_r($a);
//echo "<br>";
$i=$i+1;
}
$x="";
//foreach($d as $z)
//{
//echo $z ."<br>";	
//}

$x=implode(",",$d);	






$res1=mysqli_query($con,$r);

while($w=mysqli_fetch_array($res1))
{
	$total=$total+$w['Amount'];
}

//echo "Total Amount:".$total."</br>";


date_default_timezone_set("Asia/Kolkata");

$date=date("M d Y");
//echo $date;
//echo "</br>";

$sss=strtotime($date);
//echo date("M d Y", $sss);
//echo "</br>";
$enddate = strtotime("+1 week", $sss);
//echo "</br>";
$ending=date("M d Y", $enddate);
//echo $ending."</br>";

$time=date("h:i:sa");
//echo $time;





$idselect="SELECT ID FROM amazon1234 ORDER BY ID DESC LIMIT 1";
$idselect1=mysqli_query($con,$idselect);

$idselect2=mysqli_fetch_array($idselect1);
$customerid=$idselect2['ID'];
//echo $customerid."</br>";
$customerid1=(int)$customerid+1;
//echo $customerid1."</br>";




echo "<h4> Your ID number is :".$customerid1." </h4> </br>";
echo "<h3> The items you have ordered: </h3>".$x."</br> </br>";
echo "<h2> Thank you for shopping in our online shopping </h2>  </br>";
echo "<h4> Your ordered will be delivered with in :".$ending." </h4> </br>";


$in="INSERT INTO amazon1234(Name,MobileNumber,Email,Address,City,State,Country,Pincode,Items,Total,Date,Time,Enddate) VALUES ('$name','$number','$email','$address','$city','$state','$country','$pin','$x','$total','$date','$time','$ending')";
mysqli_query($con,$in);

$emailTo=$email;
$sub="Online shopping";
$body="Hello sir. Thank you for choosing our online shopping.
Your ID number:$customerid1
The Items you have ordered : $x
Total Amount:$total;
Mobile Numnber: $number
Adderss: $address, $city, $state, $country, $pin.
ThankYou.
Visit Our Website Again. 
Your Order will be delivered with in :$ending";		
$headers="From:example@gmail.com";
if(mail($emailTo,$sub,$body,$headers))
{
echo "Sent";
} 
else
{
echo "Not";
}
mysqli_query($con,"DELETE FROM amazondata1");
mysqli_query($con,"ALTER TABLE amazondata1 AUTO_INCREMENT = 1");
?>

<html>
<body>
<a href="mainpage.php"> <button> OK </button> </a>
</body>
</html>


