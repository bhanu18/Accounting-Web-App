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
        <button type="button" class="btn btn-info" align="left"><a href="insert_cus_details.php"><i class="fa fa-plus" aria-hidden="true"></i> Add New customer</a></button>
        <br>
        <br>
        <label for="supplier-select">Customer Name</label>
		    <select  class="form-control" id="supplier-select" name="users" onchange="showUser(this.value)">

  <option value="">Select a person:</option>
                <?php
                $link = mysqli_connect('localhost','root','','database_final_project','3308');
    if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
                $sql="select customer_id,customer_name from customer_information";
                $result = mysqli_query($link,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
                    while($row = mysqli_fetch_array($result)){
  echo "<option value=".$row['customer_id'].">".$row['customer_name']."</option>";
                    }
    mysqli_close($link);
?>
            </select>
            </div>
<!--
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Purchse Date</th>
      <th scope="col">Product</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
            </tbody>
</table>
-->
           
        </div>
           <div id="txtHint"></div>
        </div>
        </div>
    </body>
    <script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","show_cus_info.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</html>