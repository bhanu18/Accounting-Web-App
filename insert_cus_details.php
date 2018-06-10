<!doctype html>
<html lang="en">
    <head>
        <title>Insert Customer Details</title>
    </head>
    <body>
        <?php include_once('header.php')
        ?>
        <div class="container">
             <div class="jumbotron">
               <h1>New Customer</h1>
                <form action="cus_info.php" method="post">
                  <div class="col-md-4 mb-3">
      <label for="validationDefault01">Customer name</label>
      <input type="text" class="form-control" id="validationDefault01" name="customer_name" placeholder="Customer name" value="" required>
    </div>
    <div class="col-md-4 mb-3">
  <div class="form-group">
    <label for="formGroupExampleInput">Phone</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="phone" placeholder="Phone Number">
  </div>
                    </div>
                    <div class="col-md-4 mb-3">
           <div class="form-group">
    <label for="formGroupExampleInput">Date Of Membership</label>
    <input type="date" class="form-control" id="formGroupExampleInput" name="date"  placeholder="Date">
  </div>
                    </div>
                <button class="btn btn-primary" type="submit" name="submit">Submit</button> 
                 </form>
        </div>
             </div>
    </body>
</html>