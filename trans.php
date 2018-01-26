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
		    <select name="supplier" class="form-control" id="supplier-select">
			<option selected="true" disabled="disabled">Customer Name</option>
<!--
			<?php 
  				$sql = 'SELECT * from suppliers order by sid ASC';
   				$retval = mysql_query( $sql, $link);
   				while($row = mysql_fetch_array($retval)) {
   					echo "<option>{$row['supplier']}</option>";
   				}
  			?>  
-->
		    </select>
	  </div>
	  <hr>
	  <h5>2. Item Details</h5>
	  <div id="ratana">
		  <div class="form-row">
			  <div class="form-group col-md-2">
			    <label for="exampleFormControlInput1">Product</label>
			    <input name="product[]" type="text" class="form-control" id="exampleFormControlInput1">
			  </div>
			   <div class="form-group col-md-7">
			    <label for="exampleFormControlInput1">Description</label>
			    <input name="desc[]" type="text" class="form-control" id="exampleFormControlInput1">
			  </div>
			   <div class="form-group col-md-1">
			    <label for="exampleFormControlInput1">Quantity</label>
			    <input name="qty[]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
			   <div class="form-group col-md-2">
			    <label for="exampleFormControlInput1">Unit Price</label>
			    <input name="cost[]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
		  </div>
	  </div>
    </div>
    </div>
    </div>
    </body>
</html>