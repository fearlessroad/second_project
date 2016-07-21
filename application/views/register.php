
<!doctype html>
<html>
	<head lang="en">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home Page</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<style type="text/css">
			label{
				display:block;
				}
			button{
				background-color:green;
				color:white;
				display:block;
				margin:10px 0;
			}
			.col-md-4{
				padding-left:50px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">Test App</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li><a href="#">Home</a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			      	<li><a href="#">Sign In</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			<div class="row">
				<div class="col-md-4">
					<h4>Register</h4>
					<?php echo validation_errors();?>
					<form action="/forms/validate" method="post">
						<label>Email Address:</label>
							<input type="text" name="email">
						<label>First Name:</label>
							<input type="text" name="first_name">
						<label>Last Name:</label>
							<input type="text" name="last_name">
						<label>Password:</label>
							<input type="password" name="password">
						<label>Password Confirmation:</label>
							<input type="password" name="confirm_password">
						<button>Register</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>