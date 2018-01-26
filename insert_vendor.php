<!doctype html>
<html lang="en">
    <head>
        <title>Insert Vendors</title>
    </head>
    <body>
        <?php include_once('header.php')?>
        <div class="container">
            <div class="jumbotron">
               <h1>Insert Vendor</h1>
                <form>
                    <div class="col-md-4 mb-3">
                         <label for="validationCustom01">Vendor Name</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Vendor Name" value="Mark" required>
      <div class="valid-feedback">
        Looks good!
      </div>
                    </div>
                    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Phone No.</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Phone No." value="123" required>
    </div>
                    <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
                   <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
                   <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
    </body>
</html>