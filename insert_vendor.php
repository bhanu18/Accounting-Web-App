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
                <form action="insertvendordata.php" method="post">
                    <div class="col-md-4 mb-3">
                         <label for="validationCustom01" >Vendor Name</label>
      <input type="text" class="form-control" id="validationCustom01" name="vendorname" placeholder="Vendor Name" value="Mark" required >
      <div class="valid-feedback">
        Looks good!
      </div>
                    </div>
                    <div class="col-md-4 mb-3">
      <label for="validationDefault02" >Phone No.</label>
      <input type="text" class="form-control" id="validationDefault02" name="phone" placeholder="Phone No." value="123" required >
    </div>
                    <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" >
  </div>
                   <div class="form-group col-md-6">
      <label for="inputEmail4">Email 1</label>
      <input type="email" class="form-control" id="inputEmail4" name="email1" placeholder="Email 1" >
    </div>
                   <div class="form-group col-md-6">
      <label for="inputEmail4">Email 2</label>
      <input type="email" class="form-control" id="inputEmail4" name = "email2" placeholder="Email 2" >
    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
    </body>
</html>
