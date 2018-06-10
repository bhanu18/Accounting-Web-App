<!doctype html>
<html lang="en">
    <head>
        <title>
            Create User
        </title>
    </head>
    <body>
        <?php include_once('header.php') ?>
        <div class="container-fluid">
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <form>
        <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Name</label>
      <input type="text" class="form-control" id="ename" placeholder="First name" value="Mark" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">UserName</label>
      <input type="username" class="form-control" id="username" placeholder="First name" value="Mark" required>
    </div>  
       <div class="col-md-4 mb-3">
      <label for="validationDefault01">Password</label>
      <input type="password" class="form-control" id="password" placeholder="First name" value="Mark" required>
    </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
  </div>
</div>
</div>
    </body>
</html>