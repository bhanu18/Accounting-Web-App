


<!DOCTPYE html>
<html lang="en">
    <head>
        <title>Purchase Order Screen</title>
    </head>
    <body>
      <?php include_once('header.php'); ?>
       <div class="container">
        <div class="jumbotron">
  <div class="jumbotron mt-4">
	  <h4>Create Purchase Order</h4>
	  <hr class="my-4">
	  <h5>1. General Information</h5>
	  <form action="create_po.php" method="post">
	  <div class="form-row">
	  <div class="form-group col-md-4">
		    <label for="purchasedate">Purchase Order Date</label>
		    <input name="purchasedate" type="date" class="form-control" id="purchasedate" placeholder="dd/mm/yy">
		  </div>
		  <div class="form-group col-md-4">
		    <label for="supplier-select">Choose a Vendor</label>
		    <select name="vendor" class="form-control" id="vendor"> 
		    <option selected="true" disabled="disabled">Choose Vendor</option>
							<?php

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('database_final_project');

$strSQL = 'SELECT * from vedor_general_details order by Vendor_ID ASC';

$objQuery = mysql_query($strSQL);

while($objResult = mysql_fetch_array($objQuery))

{

?>

<option value="<?php $objResult['0'];?>"><?php echo $objResult['Vendor_Name'];?></option>


<?php

}


mysql_close();

?>
		    </select>
		  </div>
		  
	  </div>
	  <hr>
	  <h5>2. Item Details</h5>
	  <div id="items">
		  <div class="form-row">
			  <div class="form-group col-md-2">
			    <label for="exampleFormControlInput1">Product</label>
			    <input name="product[]" type="text" class="form-control" id="exampleFormControlInput1">
			  </div>
			   <div class="form-group col-md-1">
			    <label for="exampleFormControlInput1">Quantity</label>
			    <input name="qty[]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
			   <div class="form-group col-md-2">
			    <label for="exampleFormControlInput1">Cost per unit</label>
			    <input name="cost[]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
			   <div class="form-group col-md-2">
			    <label for="exampleFormControlInput1">Amount</label>
			    <input name="amount[cost*qty]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
		  </div>
	  </div>
	  <button id="more" type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>
Add more items</button>
	  <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o" aria-hidden="true"></i>  Send</button>
	</div>
	
</div>
</div>
        </div>

  <script src="myscript.js"></script>
    </body>
</html>
