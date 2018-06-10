<!DOCTYPE html>
<html>
<head>
<title>Create Transaction</title>
    </head>
<body>
<?php include_once('header.php'); ?>
<div class="container">
	<div class="jumbotron mt-4">
	  <h4>Create Transaction</h4>
	  <hr class="my-4">
	  <h5>1. Details</h5>
	  <div class="form-group col-md-4">
		    <label for="purchasedate">Date</label>
		    <input name="purchasedate" type="date" class="form-control" id="purchasedate" placeholder="dd/mm/yy">
		  </div>
	  <div class="form-row">
		  <div class="form-group col-md-4">
		    <label for="supplier-select">Customer Name</label>
		    <select name="customer_name" class="form-control" id="supplier-select">
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


mysql_close();

?>

		    </select>
	  </div>
	  <hr>
	  <br>
	  <hr>
	  <div id="ratana">
	<h5>2. Item Details</h5>
		  <div class="form-row">
			  <div class="form-group col-md-2">
			    <label for="exampleFormControlInput1">Product</label>
			    <input name="product[]" type="text" class="form-control" id="exampleFormControlInput1">
			  </div>
			  
			   <div class="form-group col-md-2">
			    <label for="exampleFormControlInput1">Quantity</label>
			    <input name="qty[]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
			   <div class="form-group col-md-2">
			    <label for="exampleFormControlInput1">Unit Price</label>
			    <input name="cost[]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
		  </div>
		  
			  <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o" aria-hidden="true" value="submit"></i> Create</button>
	  </div>
    </div>
    </div>
    </div>
    </body>
</html>