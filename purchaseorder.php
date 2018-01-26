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
		    <select name="supplier" class="form-control" id="supplier-select">
			<option selected="true" disabled="disabled">Choose Vendor</option>  
		    </select>
		  </div>
		  <div class="form-group col-md-4">
		    <label for="shipping">Shipping Address</label>
		    <textarea name="shipping" class="form-control" id="shipping" rows="3"></textarea>
		  </div>
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
			    <label for="exampleFormControlInput1">Description </label>
			    <input name="desc[]" type="text" class="form-control" id="exampleFormControlInput1">
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
			    <input name="cost[]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
		  </div>
	  </div>
	  <button id="more" type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>
Add more items</button>
	  <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o" aria-hidden="true"></i>  Send</button>
	</div>
	<h4>Purchase Order</h4>

	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">PID</th>
      <th scope="col">Supplier</th>
      <th scope="col">Purchase Order Date</th>
      <th scope="col">Product</th>
      <th scope="col">Description</th>
      <th scope="col">QTY</th>
      <th scope="col">Cost</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>
</div>
        </div>
    </body>
</html>