<!doctype html>
<html lang="en">
    <head>
        <title>
            Insert Product
        </title>
    </head>
    <body>
        <?php include_once('header.php')?>
        <div class="container">
            <div class="jumbotron">
               <h2>Insert Product</h2>
                <form>
                    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Product Name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Product Name" value="Apple" required>
    </div>
               <div class="form-group col-md-1">
			    <label for="exampleFormControlInput1">Product Maximum</label>
			    <input name="qty[]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
               <div class="form-group col-md-2">
			    <label for="exampleFormControlInput1">Cost per unit</label>
			    <input name="cost[]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
               <div class="form-group col-md-2">
			    <label for="exampleFormControlInput1">Price per unit</label>
			    <input name="cost[]" type="number" class="form-control" id="exampleFormControlInput1">
			  </div>
               <div class="col-md-4 mb-3">
      <label for="validationDefault01">Vendor ID product</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="ID" value="" required>
    </div>        
               <button class="btn btn-primary" type="submit">Submit</button>     
                </form>
            </div>
        </div>
    </body>
</html>