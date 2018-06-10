
<?php

$product=$_POST['product[]'];
$qty=$_POST['qty[]'];
$cost=$_POST['cost[]'];
$date=$_POST['purchasedate'];
$Email2=$_POST['email2'];


$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br>';

 $sql = "INSERT INTO `receipt` ( `Product_Quantity`, `Date_Of_Sale`, `Receipt_Unit_Price_Record`, ) VALUES ('$qty', '$date', '$cost')"
  
 ;

  

   mysql_select_db('database_final_project');
   $retval = mysql_query( $sql, $link );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   else{
   		echo "Data Entered successfully";
   		
   		echo "We will now redirect you to the members area";
		header("Location:http://localhost/web2pro/salesorder.php");