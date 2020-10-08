<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Customers
        </title>
    </head>
    <body>
      <?php include_once('header.php'); ?>
       <div class="container">
       <div class="jumbotron mt-4">
        <div class="form-row">
        <div class="form-group col-md-4">
        <button type="button" class="btn btn-info" align="left"><a href="insert_cus_details.php"><i class="fa fa-plus" aria-hidden="true"></i> Add New customer</a></button>
        <br>
        <br>
        <label for="supplier-select">Customer Name</label>
		    <select name="supplier" class="form-control" id="supplier-select">
			<option selected="true" disabled="disabled">Customer Name</option>
      <?php

mysqli_connect("localhost","root","") or die(mysql_error());
mysqli_select_db('database_final_project');

$strSQL = 'SELECT * from customer_information order by Customer_ID ASC';

$objQuery = mysqli_query($link,$strSQL);

while($objResult = mysqli_fetch_array($objQuery))
{
   echo '<option value='$objResult["Customer_ID"].'>'$objResult["Customer_Name"];'</option>'
}
?>
        </select>
        <form>
           <div class="form-group">
    <label for="formGroupExampleInput">Date Of Membership</label>

    <input type="date" class="form-control" id="formGroupExampleInput" name="date" placeholder="Date">
    <option value="<?php echo $objResult["CustomerID"];?>"><?php echo $objResult["Customer_Membership_Date"];?></option>
  </div>
            </form>
        </div>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Purchse Date</th>
      <th scope="col">Product</th>
      <th scope="col">Amount</th>
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

$sql    = 'SELECT * FROM recipt';

$result = mysqli_query($link,$sql);


while($row = mysqli_fetch_array($result))
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

//list the information


//close the connection
mysqli_close($link);

?>
  </tbody>
</table>
        </div>
        </div>
        </div>
    </body>
</html>