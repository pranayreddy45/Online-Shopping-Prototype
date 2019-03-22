# Online-Shopping-Prototype
This is Online shopping prototype for localhost.
mainpage.php is index page. </br>
'data1' is database name.
'amazon1234' is table name with attributes of ID,Name,MobileNumber,Email,Address,City,State,Country,Pincode,Items,Total,Date,Time,Enddate.
In 'amazon1234' table I stored entire items in 'Items' attribute as a list. It works but it is better to create an another table for Items along with ID as primaty key. 
'amazondata1' table stores users items temporarily until the user clicks confirm. Once user clicks confirm items in amazondata1 will be deleted and stored in 'amazon1234'.
If you want to host this project then you need to create seperate temporarily table('amazondata1') for each users.
