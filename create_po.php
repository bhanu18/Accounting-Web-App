<?php

$purchaseDate = $_POST['purchasedate'];
$product = $_POST['product'];

$vendor = $_POST['vendor'];

$qty = $_POST['qty'];
$cost = $_POST['cost'];

$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br>';

for ($i=0; $i < count($product); $i++) { 
	// How to insert your things into DB
$sql = "INSERT INTO `purchase_order_status` ( `Purchase_Order_Date`, 'Vendor_ID') VALUES ('$purchaseDate', '$vendor')";
//$sqlselect = mysql_query("SELECT Vendor_Name FROM vedor_general_details");

      
   mysql_select_db('database_final_project');
   $retval = mysql_query( $sql, $link );

   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
}

$query = "SELECT Vendor_Name FROM `vedor_general_details`";



$result1 = mysql_query($query);


   
echo "Entered data successfully\n";

mysql_close($link);



?>