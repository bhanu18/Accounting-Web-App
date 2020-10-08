<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_final_project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname,'3308');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Customer_information (customer_name, customer_membership_date, customer_phone_number)
VALUES ('John', 10/10/19, '100')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>