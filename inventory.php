<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Inventory</title>
    </head>
    <body>
      <?php include_once('header.php'); ?>
       <div class="container">
        <div class="jumbotron">
  <h1 class="display-4">Inventory</h1>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Maximum</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
      <th scope="col">Cost</th>
      
    </tr>
  </thead>
  <tbody>
    <?php

//1. make a connection
$link = mysqli_connect('localhost', 'root', '','database_final_project','3308');
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

//2. get the information

$sql    = 'SELECT * FROM product_details';
//$sql2 = 'SELECT Vendor_Bank_Account_Number FROM vendor_bank_details';
$result = mysqli_query($link,$sql);
//$result2 = mysqli_query($link, $sql2);

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td cellspacing='10'>".$row['Product_ID']."</td>";
  echo "<td cellspacing='10'>".$row['Product_Name']."</td>";
  echo "<td>".$row['Product_Quantity']."</td>";
  echo "<td>".$row['Product_Maximum']."</td>";
  echo "<td>".$row['Product_Status']."</td>";
  echo "<td>".$row['Product_Unit_Price']."</td>";
  echo "<td>".$row['Product_Unit_Cost']."</td>";
  //echo "<td><a href='edit_po.php?Pid=".$row['Pid']."'><i class='fa fa-pencil' aria-hidden='true'></i></a></td>";
  //echo "<td><a href='delete_po.php?Pid=".$row['Pid']."'>Delete</a></td>";
  echo "</tr>";

}

//list the information


//close the connection
mysqli_close($link);

?>
  </tbody>
</table>
    </div>
        </div>
    </body>
</html>