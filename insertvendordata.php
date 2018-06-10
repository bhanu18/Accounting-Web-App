
<?php

$V_name=$_POST['vendorname'];
$Phn=$_POST['phone'];
$Addr=$_POST['address'];
$Email1=$_POST['email1'];
$Email2=$_POST['email2'];


$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br>';



  $sql="INSERT INTO `vedor_general_details` ( `Vendor_Name`, `Vedor_Phone_Number`, `Vendor_Address`, `Vendor_Email1`, `Vendor_Email2`) VALUES ('$V_name','$Phn','$Addr','$Email1','$Email2')";

  

   mysql_select_db('database_final_project');
   $retval = mysql_query( $sql, $link );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   else{
   		echo "Data Entered successfully";
   		
   		echo "We will now redirect you to the members area";
		header("Location:http://localhost/web2pro/vendor.php");

   }




   
 
   

mysql_close($link);

?>