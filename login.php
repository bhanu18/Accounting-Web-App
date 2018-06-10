<?php include_once('header.php'); ?>

<div class="container">
	<div class="jumbotron mt-4">

	  <h4>Login</h4>
	  <?php 
	  	if(!empty($_SESSION['errLogin']))
	  	{
	  		echo "<div class='alert alert-danger'>".$_SESSION['errLogin']."</div>";
	  		unset($_SESSION['errLogin']);
	  	}
	  ?>
	  <hr>
	  <form method="post" action="login_user.php">
	  	<div class="form-row">
			  <div class="form-group col-md-5">
			    <label for="email">Email</label>
			    <input class="form-control" name="email" type="text" id="email">
			  </div>
			  <div class="form-group col-md-7">
			    <label for="password">Password</label>
			    <input name="password" type="password" class="form-control" id="password">
			  </div>
		  </div>
		  <button id="btn_login" type="submit" class="btn btn-primary">Login</button>
	  </form>
	 </div>
</div>

