
<?php

$V_name=$_POST['vendorname'];
$Phn=$_POST['phone'];
$Addr=$_POST['address'];
$Email1=$_POST['email1'];
$Email2=$_POST['email2'];


$link = mysqli_connect('localhost', 'root', '','database_final_project','3308');
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
echo 'Connected successfully<br>';



  $sql="INSERT INTO vedor_general_details ( Vendor_Name, Vedor_Phone_Number, Vendor_Address, Vendor_Email1, Vendor_Email2) VALUES ('$V_name','$Phn','$Addr','$Email1','$Email2')";


   $retval = mysqli_query( $link,$sql );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysqli_error($link));
   }
   else{
   		echo "Data Entered successfully";
   		
   		echo "We will now redirect you to the members area";
		header("Location:http://localhost/acc_web_app/vendor.php");

   }




   
 
   

mysqli_close($link);

?>