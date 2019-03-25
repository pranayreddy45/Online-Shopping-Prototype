# Online-Shopping-Prototype
<b> Note:This is not any online shopping site. This is my online shopping project. All the products you ordered in this site are not considered. </b>
<br />
This is Online shopping prototype for localhost.
<br />
mainpage.php is index page. <br />
'data1' is database name.
<br />
Create table 'amazon1234' with attributes of ID,Name,MobileNumber,Email,Address,City,State,Country,Pincode,Items,Total,Date,Time,Enddate.
<br />
Create table 'amazondata1' with attributes ID,DATA,Amount.
<br />
In 'amazon1234' table I stored entire items in 'Items' attribute as a list. It works but it is better to create an another table for Items along with ID as primaty key.
<br />
'amazondata1' table stores users items temporarily until the user clicks confirm. Once user clicks confirm items in amazondata1 will be deleted and stored in 'amazon1234'.
<br />
If you want to host this project then you need to create seperate temporarily table('amazondata1') for each users.
<br />
Write your email address in place of example@gmail.com in final.php and cancel1.php.
<br />
Your email works if you set up your email in your localhost.
