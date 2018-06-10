<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Sales Orders</title>
    </head>
    <body>
     <?php include_once('header.php'); ?>
      <br>
        <br>
       <div class="container">
       <div class="jumbotron mt-4">
        <button type="button" class="btn btn-secondary" align="left" id="gb"><a href="trans.php"><i class="fa fa-plus" aria-hidden="true"></i> Create transaction</a></button>
        <br>
        <br>
         <h1 class="display-4">Sales Order</h1>
         <br>
         <br>
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Order</th>
      <th scope="col">Customer</th>
       <th scope="col">Products</th>
        <th scope="col">Status</th>
         <th scope="col">Total Amount</th>
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
       
<!--
    <?php 
  		$sql = 'SELECT * from purchase_orders order by pid ASC';
   		$retval = mysql_query( $sql, $link);
   		while($row = mysql_fetch_array($retval)) {
   			echo "<tr>";
      		echo "<th scope='row'>{$row['pid']}</th>";
      		echo "<td>{$row['supplier']}</td>";
      		echo "<td>{$row['purchase_order_date']}</td>";
      		echo "<td>{$row['product']}</td>";
      		echo "<td>{$row['description']}</td>";
      		echo "<td>{$row['qty']}</td>";
      	    echo "<td>{$row['unit_cost']}</td>";
      	    echo "</tr>";
   		}
   		mysql_close($link);
  ?>
-->
        </div>
           </div>
        </div>
    </body>
</html>