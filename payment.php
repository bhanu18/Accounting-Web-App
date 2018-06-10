<!DOCTYPE html>
<html lang="en">
    <head>
<title>Payment Screen</title>
</head>
<body>
    <?php include_once('header.php'); ?>
    <div class="container">
        <div class="jumbotron mt-4">
          <h3>Payment Screen</h3>
          <br>
           <div class="form-group col-md-4">
            <label for="payment">Payment Date</label>
		    <select name="payment" class="form-control" id="">
			<option selected="true" disabled="disabled">Payment Date</option>
            </select>
            
            <label for="payment">Billed Date</label>
		    <select name="payment" class="form-control" id="">
			<option selected="true" disabled="disabled">Billed Date</option>
            </select>
            </div>
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Vendor Name</th>
      <th scope="col">Product</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Cost</th>
      <th scope="col">Amount</th>
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
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
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