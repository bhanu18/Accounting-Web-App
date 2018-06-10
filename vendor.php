
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!doctype html>
<html lang="en">
    <head> 
    <title>Vendor</title>
    </head>
    <body>
        <?php include_once('header.php'); ?>
        <div class="container">
        <div class="jumbotron">
        <div class="col-md-4 mb-3">
  <h1 class="display-4">View Vendor</h1>
  <a href="insert_vendor.php" class="badge badge-secondary"><button type="button" class="btn btn-secondary">Insert Vendors</button></a>
  <a href="vendor_product.php" class="badge badge-secondary"><button type="button" class="btn btn-secondary">Vendor Products</button></a>
            </div>
  <div class="col-md-4 mb-3">
            </div>

  <br>
  <br>
  <table class="table table-hover" cellspacing="5" cellpadding="5" border="0">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Address</th>
      <th scope="col">Email 1</th>
      <th scope="col">Email 2</th>
       <th scope="col">Bank Account</th>
    </tr>
  </thead>
  <tbody>
    <?php

//1. make a connection
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

//2. get the information

mysql_select_db('database_final_project');

$sql    = 'SELECT * FROM vedor_general_details';
$sql2 = 'SELECT Vendor_Bank_Account_Number FROM vendor_bank_details';
$result = mysql_query($sql, $link);
$result2 = mysql_query($sql2, $link);

echo "<table>";

while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td cellspacing='10'>".$row['Vendor_ID']."</td>";
  echo "<td cellspacing='10'>".$row['Vendor_Name']."</td>";
  echo "<td>".$row['Vedor_Phone_Number']."</td>";
  echo "<td>".$row['Vendor_Address']."</td>";
  echo "<td>".$row['Vendor_Email1']."</td>";
  echo "<td>".$row['Vendor_Email2']."</td>";
  //echo "<td>".$row['Vendor_Bank_Account_Number']."</td>";
  //echo "<td><a href='edit_po.php?Pid=".$row['Pid']."'><i class='fa fa-pencil' aria-hidden='true'></i></a></td>";
  //echo "<td><a href='delete_po.php?Pid=".$row['Pid']."'>Delete</a></td>";
  echo "</tr>";

}

echo "</table>";

//list the information


//close the connection
mysql_close($link);

?>
  </tbody>
</table>
</div>
</div>
    </body>
</html>