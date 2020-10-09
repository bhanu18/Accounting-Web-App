<?php

$q = intval($_GET['q']);
$link = mysqli_connect('localhost','root','','database_final_project','3308');
    if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

    
$sql="SELECT customer_name, Product_Quantity, Receipt_Unit_Price_Record from customer_receipt INNER join customer_information on customer_receipt.Customer_ID=customer_information.Customer_ID INNER JOIN receipt on receipt.Receipt_ID= customer_receipt.Receipt_ID where customer_information.customer_id ='".$q."'";
$result = mysqli_query($link,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}

echo '<table>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Product</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>'
    ;
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['customer_name'] . "</td>";
  echo "<td>" . $row['Product_Quantity'] . "</td>";
  echo "<td>" . $row['Receipt_Unit_Price_Record'] . "</td>";
  //echo "<td>" . $row['Hometown'] . "</td>";
  //echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>