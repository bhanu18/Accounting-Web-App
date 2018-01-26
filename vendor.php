<!doctype html>
<html lang="en">
    <head> 
    <title>Vendor</title>
    </head>
    <body>
        <?php include_once('header.php'); ?>
        <div class="container">
        <div class="jumbotron">
        <div class="col-md-4 mb-3">
  <h1 class="display-4">View Vendor</h1>
  <button type="button" class="btn btn-secondary"><a href="insert_vendor.php" class="badge badge-secondary">Insert Vendors</a></button>
            </div>
  <div class="col-md-4 mb-3">
  <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect"></label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Vendor ID</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
            </div>
  <br>
  <br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Address</th>
       <th scope="col">Email 1</th>
        <th scope="col">Email 2</th>
         <th scope="col">Bank Account</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</div>
</div>
    </body>
</html>