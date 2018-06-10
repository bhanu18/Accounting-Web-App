<?php



$customer_name = $_POST['customer_name'];
$date = $_POST['date'];
$phone = $_POST['phone'];


$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br>';

 
	// How to insert your things into DB
$sql = "INSERT INTO customer_information ".
      "(Customer_Name, Customer_Membership_Date, Customer_Phone_Number) ".
      "VALUES ( '$customer_name', '$date', '$phone')";
      
   mysql_select_db('database_final_project');
   $retval = mysql_query( $sql, $link );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }



   
echo "Entered data successfully\n";


mysql_close($link);
	echo "We will now redirect you to the members area";
		header("Location:http://localhost/web2pro/cus.php");    





?>