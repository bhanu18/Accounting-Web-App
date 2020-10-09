<?php
$customer_name = $_POST['customer_name'];
$date = $_POST['date'];
$phone = $_POST['phone'];


$link = mysqli_connect('localhost', 'root', '','database_final_project','3308');
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
echo 'Connected successfully<br>';
 
	// How to insert your things into DB
$query = "INSERT INTO Customer_information (customer_name, customer_membership_date, customer_phone_number)
VALUES ($customer_name, $date, $phone)";
      

  if (mysqli_query($link, $query)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
	echo "We will now redirect you to the members area";
		header("Location:http://localhost/acc_web_app/cus.php");    





?>