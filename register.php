<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="css/global2.css" type="text/css" rel="stylesheet">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid bg">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<!--start-->
				<form class="form-continer" method="post" action="register.php">
					<?php include('errors.php'); ?>
					<h1>Register</h1>
				  	<div class="form-group">
				    	<label >Username</label>
				    	<input type="text" name ="username"class="form-control"value="<?php echo $username; ?>">
				  </div>
				  <div class="form-group">
				    	<label >Email</label>
				    	<input type="email" name ="email"class="form-control"value="<?php echo $email; ?>">
				  </div>
				  <div class="form-group">
				    	<label >Password</label>
				    	<input type="password" name ="password_1"class="form-control">
				  </div>
				  <div class="form-group">
				    	<label >Confirm Password</label>
				    	<input type="password"  name="password_2" class="form-control" >
				  </div>
				  	<button type="submit" class="btn btn-success btn-block" name="reg_user">Submit</button>
				  	<p></p>
				  	<button type="button" class="btn btn-info" onclick="location.href='login.php';">Already a member?</button>
				</form>	
				<!--end-->
			</div>
		</div>
	</div>
		
	

</body>
</html>