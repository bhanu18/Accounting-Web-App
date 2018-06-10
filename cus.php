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

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('database_final_project');

$strSQL = 'SELECT * from customer_information order by Customer_ID ASC';

$objQuery = mysql_query($strSQL);

while($objResult = mysql_fetch_array($objQuery))

{

?>

<option value="<?php echo $objResult['Customer_ID'];?>"><?php echo $objResult['Customer_ID']." - ".$objResult['Customer_Name'];?></option>

<?php

}




?>
        </select>
        <form>
  <div class="form-group">
    <label for="formGroupExampleInput">Phone</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Phone Number">
  </div>
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
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
        </div>
        </div>
        </div>
        </div>
    </body>
</html>