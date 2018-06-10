<!doctype html>
<html lang="en">
    <head>
        <title>
            Create Invoice
        </title>
    </head>
    <body>
        <?php include_once('header.php')
        ?>
        <div class="container">
            <div class="jumbotron">
               <div class="col-md-4 mb-3">
               <label for="validationDefault02">Select Customer ID</label>
                <select class="custom-select" id="inputGroupSelect01">
    <option selected>Customer ID</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
                </div>
                <div class="col-md-4 mb-3">
      <label for="validationDefault01">Receipt ID(auto generated)</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="" value="" required>
    </div>
           <div class="col-md-4 mb-3">
      <label for="validationDefault01">Date(auto generated)</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="" value="" required>
    </div>
          <div class="col-md-4 mb-3">
           <label for="validationDefault02">Product</label>
            <select class="custom-select" id="inputGroupSelect01">
    <option selected>Product</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
                </div>
            <div class="form-group col-md-2">
			    <label for="exampleFormControlInput1">Quantity</label>
			    <input name="qty[]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
           <div class="col-md-4 mb-3">
      <label for="validationDefault01">Total(auto generated)</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="" value="" required>
    </div>
           <div class="col-md-4 mb-3">
                <label for="validationDefault01">Receipt Status:</label>
           </div>
           <button class="btn btn-primary" type="submit">Create</button> 
            </div>
        </div>
    </body>
</html>