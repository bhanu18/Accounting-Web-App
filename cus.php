<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Customers
        </title>
    </head>
    <body>
      <?php include_once('header.php'); ?>
       <div class="container">
       <div class="jumbotron mt-4">
        <div class="form-row">
        <div class="form-group col-md-4">
        <button type="button" class="btn btn-info" align="left"><a href="#"><i class="fa fa-plus" aria-hidden="true"></i> Add New customer</a></button>
        <br>
        <br>
        <label for="supplier-select">Customer Name</label>
		    <select name="supplier" class="form-control" id="supplier-select">
			<option selected="true" disabled="disabled">Customer Name</option>
        </select>
        <form>
  <div class="form-group">
    <label for="formGroupExampleInput">Phone</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Phone Number">
  </div>
           <div class="form-group">
    <label for="formGroupExampleInput">Date Of Membership</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Date">
  </div>
            </form>
        </div>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Purchse Date</th>
      <th scope="col">Product</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        </div>
        </div>
        </div>
        </div>
    </body>
</html>