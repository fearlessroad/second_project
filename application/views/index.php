<!doctype html>
<html>
	<head lang="en">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home Page</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
			<!-- begin jumbotron -->
			<div class="jumbotron">
			  <h2>Welcome to the Test</h2>
			  <p>We're going to build a cool application using a MVC framework! This application was built with the Village88 folks!</p>
			  <p><a class="btn btn-primary btn-lg" href="/signin/" role="button">Start!</a></p>
			 </div>
			 <!-- begin button group -->
			<div class="row">
				<div class="col-md-4">
					<h4>Manage Users</h4>
					<p>Using this application, you'll learn how to add, remove, and edit users for the application.</p>
				</div>
				<div class="col-md-4">
					<h4>Leave Messages</h4>
					<p>Users will be able to leave a message to another user using this application.</p>
				</div>
				<div class="col-md-4">
					<h4>Edit User Information</h4>
					<p>Admins will be able to edit another user's information (email address, first name, last name, etc).</p>
				</div>
			</div>
		</div>
	</body>
</html>